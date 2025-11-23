<?php

namespace Cms\Modules\Admin\Services;

use Cms\Modules\Admin\Repositories\Contracts\OrderRepositoryContract;
use Cms\Modules\Admin\Services\Contracts\OrderServiceContract;
use Cms\Modules\Admin\Services\Contracts\PushNotificationServiceContract;
use Cms\Modules\Core\Services\CoreBaseService;

class OrderService extends CoreBaseService implements OrderServiceContract
{
    protected $repository;
    protected $pushNotificationService;

    public function __construct(
        OrderRepositoryContract $repository,
        PushNotificationServiceContract $pushNotificationService = null
    ) {
        $this->repository = $repository;
        $this->pushNotificationService = $pushNotificationService;
    }

    public function store($data)
    {
        $order = parent::store($data);
        
        // Send push notification when new order is created
        if ($order && $this->pushNotificationService) {
            try {
                $this->pushNotificationService->sendNotification([
                    'title' => 'Đơn hàng mới',
                    'body' => "Có đơn hàng mới từ {$order->full_name} - Tổng tiền: " . number_format($order->total ?? 0) . " VNĐ",
                    'icon' => '/pwa-icons/icon-192x192.png',
                    'badge' => '/pwa-icons/icon-72x72.png',
                    'tag' => 'new-order',
                    'data' => [
                        'url' => route('admin.order.detail', $order->id),
                        'type' => 'order',
                        'order_id' => $order->id
                    ],
                    'requireInteraction' => true
                ]);
            } catch (\Exception $e) {
                // Log error but don't fail the order creation
                \Log::error('Failed to send push notification for new order: ' . $e->getMessage());
            }
        }
        
        return $order;
    }

    public function getOrderWithDetail($id)
    {
        return $this->repository->getOrderWithDetail($id);
    }

    public function paginateWithDetail($number)
    {
        return $this->repository->paginateWithDetail($number);
    }
}
