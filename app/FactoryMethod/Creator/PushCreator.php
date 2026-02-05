<?php

namespace App\FactoryMethod\Creator;
use App\FactoryMethod\Creator\NotificationCreator;
use App\FactoryMethod\Product\PushNotification;
use App\FactoryMethod\Product\Notification;

class PushCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new PushNotification;
    }
}
