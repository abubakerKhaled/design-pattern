<?php

namespace App\FactoryMethod;
use App\FactoryMethod\NotificationCreator;
use App\FactoryMethod\SMSNotification;

class SMSCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new SMSNotification;
    }
}