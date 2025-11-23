<?php

namespace Cms\Modules\Admin\Services\Contracts;

interface PushNotificationServiceContract
{
    public function sendNotification(array $notification);
}
