<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\ContactRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\ContactServiceContract;
use Cms\Modules\Admin\Services\Contracts\PushNotificationServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class ContactService extends CoreBaseService implements ContactServiceContract
{
    protected $repository;
    protected $pushNotificationService;

    public function __construct(
        ContactRepositoryContract $repository,
        PushNotificationServiceContract $pushNotificationService = null
    ) {
        $this->repository = $repository;
        $this->pushNotificationService = $pushNotificationService;
    }

    public function store($data)
    {
        $contact = parent::store($data);
        
        // Send push notification when new contact is created
        if ($contact && $this->pushNotificationService) {
            try {
                $this->pushNotificationService->sendNotification([
                    'title' => 'Liên hệ mới',
                    'body' => "Có liên hệ mới từ {$contact->full_name} ({$contact->email})",
                    'icon' => '/pwa-icons/icon-192x192.png',
                    'badge' => '/pwa-icons/icon-72x72.png',
                    'tag' => 'new-contact',
                    'data' => [
                        'url' => route('admin.contact.list'),
                        'type' => 'contact',
                        'contact_id' => $contact->id
                    ],
                    'requireInteraction' => true
                ]);
            } catch (\Exception $e) {
                // Log error but don't fail the contact creation
                \Log::error('Failed to send push notification for new contact: ' . $e->getMessage());
            }
        }
        
        return $contact;
    }

    public function getAllContact($number)
    {
        return $this->repository->getAllContact($number);
    }
}
