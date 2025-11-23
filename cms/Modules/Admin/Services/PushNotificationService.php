<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Services\Contracts\PushNotificationServiceContract;
use Illuminate\Support\Facades\Log;

class PushNotificationService implements PushNotificationServiceContract
{
    protected $webPush;

    public function __construct()
    {
        // Initialize web-push if available
        if (class_exists('\Minishlink\WebPush\WebPush')) {
            $this->initWebPush();
        }
    }

    protected function initWebPush()
    {
        $publicKey = config('app.vapid_public_key');
        $privateKey = config('app.vapid_private_key');
        $subject = config('app.vapid_subject', 'mailto:admin@example.com');

        if ($publicKey && $privateKey) {
            $this->webPush = new \Minishlink\WebPush\WebPush([
                'VAPID' => [
                    'publicKey' => $publicKey,
                    'privateKey' => $privateKey,
                    'subject' => $subject,
                ],
            ]);
        }
    }

    /**
     * Send push notification to all subscribers
     */
    public function sendNotification(array $notification)
    {
        try {
            $notificationData = [
                'title' => $notification['title'] ?? 'Thông báo mới',
                'body' => $notification['body'] ?? '',
                'icon' => $notification['icon'] ?? '/pwa-icons/icon-192x192.png',
                'badge' => $notification['badge'] ?? '/pwa-icons/icon-72x72.png',
                'tag' => $notification['tag'] ?? 'notification',
                'data' => $notification['data'] ?? [],
                'requireInteraction' => $notification['requireInteraction'] ?? true,
                'sound' => '/sounds/notification.mp3', // Sound for iPhone
            ];

            $payload = json_encode($notificationData);

            // Get all subscriptions from file
            $subscriptionsFile = storage_path('app/push_subscriptions.json');
            $subscriptions = [];
            
            if (file_exists($subscriptionsFile)) {
                $subscriptions = json_decode(file_get_contents($subscriptionsFile), true) ?: [];
            }

            $results = [];
            
            // Send to all subscriptions
            foreach ($subscriptions as $subscription) {
                try {
                    if ($this->webPush && isset($subscription['keys'])) {
                        $pushSubscription = new \Minishlink\WebPush\Subscription(
                            $subscription['endpoint'],
                            $subscription['keys']['p256dh'],
                            $subscription['keys']['auth']
                        );

                        $result = $this->webPush->sendOneNotification($pushSubscription, $payload);
                        
                        if ($result->isSuccess()) {
                            $results[] = ['success' => true, 'endpoint' => $subscription['endpoint']];
                        } else {
                            // Subscription expired, remove it
                            unset($subscriptions[$subscription['endpoint']]);
                            Log::warning('Push notification failed: ' . $result->getReason());
                        }
                    }
                } catch (\Exception $e) {
                    Log::error('Failed to send push to ' . $subscription['endpoint'] . ': ' . $e->getMessage());
                    // Remove invalid subscription
                    unset($subscriptions[$subscription['endpoint']]);
                }
            }

            // Update subscriptions file (remove invalid ones)
            if (file_exists($subscriptionsFile)) {
                file_put_contents($subscriptionsFile, json_encode($subscriptions, JSON_PRETTY_PRINT));
            }

            // Also store in cache for polling fallback
            \Cache::put('latest_notification', $notificationData, 60);
            
            Log::info('Push notification sent', ['count' => count($results)]);
            
            return true;
        } catch (\Exception $e) {
            Log::error('Push notification error: ' . $e->getMessage());
            return false;
        }
    }
}
