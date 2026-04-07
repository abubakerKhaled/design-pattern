<?php

namespace App\FactoryMethod\Creator;

use App\FactoryMethod\Product\Notification;
use App\FactoryMethod\Product\SMSNotification;

class SMSCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new SMSNotification;
    }
}
