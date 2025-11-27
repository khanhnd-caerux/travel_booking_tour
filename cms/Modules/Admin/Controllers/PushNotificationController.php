<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PushNotificationController extends Controller
{
    /**
     * Get VAPID public key
     */
    public function getVapidKey()
    {
        $publicKey = config('app.vapid_public_key', '');
        
        return response()->json([
            'publicKey' => $publicKey
        ]);
    }

    /**
     * Subscribe to push notifications
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'endpoint' => 'required|url',
            'keys' => 'required|array',
            'keys.p256dh' => 'required|string',
            'keys.auth' => 'required|string',
        ]);

        try {
            // Store subscription in file (simple approach, no DB)
            $subscriptionsFile = storage_path('app/push_subscriptions.json');
            $subscriptions = [];
            
            if (file_exists($subscriptionsFile)) {
                $subscriptions = json_decode(file_get_contents($subscriptionsFile), true) ?: [];
            }
            
            // Add or update subscription
            $subscriptions[$request->endpoint] = [
                'endpoint' => $request->endpoint,
                'keys' => $request->keys,
                'user_agent' => $request->userAgent(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
            
            file_put_contents($subscriptionsFile, json_encode($subscriptions, JSON_PRETTY_PRINT));
            
            return response()->json([
                'success' => true,
                'message' => 'Đăng ký thông báo thành công'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Push subscription error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Đăng ký thông báo thất bại: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Unsubscribe from push notifications
     */
    public function unsubscribe(Request $request)
    {
        $request->validate([
            'endpoint' => 'required|url',
        ]);

        try {
            $subscriptionsFile = storage_path('app/push_subscriptions.json');
            
            if (file_exists($subscriptionsFile)) {
                $subscriptions = json_decode(file_get_contents($subscriptionsFile), true) ?: [];
                unset($subscriptions[$request->endpoint]);
                file_put_contents($subscriptionsFile, json_encode($subscriptions, JSON_PRETTY_PRINT));
            }
            
            return response()->json([
                'success' => true,
                'message' => 'Hủy đăng ký thông báo thành công'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Push unsubscription error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Hủy đăng ký thông báo thất bại: ' . $e->getMessage()
            ], 500);
        }
    }
}


