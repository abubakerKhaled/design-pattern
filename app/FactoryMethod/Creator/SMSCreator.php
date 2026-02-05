<?php

namespace App\FactoryMethod\Creator;
use App\FactoryMethod\Creator\NotificationCreator;
use App\FactoryMethod\Product\SMSNotification;
use App\FactoryMethod\Product\Notification;

class SMSCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new SMSNotification;
    }
}