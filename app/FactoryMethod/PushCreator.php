<?php

namespace App\FactoryMethod;
use App\FactoryMethod\NotificationCreator;
use App\FactoryMethod\PushNotification;

class PushCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new PushNotification;
    }
}
