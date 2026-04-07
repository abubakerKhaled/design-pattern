<?php

namespace App\FactoryMethod\Creator;

use App\FactoryMethod\Product\Notification;
use App\FactoryMethod\Product\PushNotification;

class PushCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new PushNotification;
    }
}
