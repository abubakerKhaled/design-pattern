<?php

namespace App\FactoryMethod;
use App\FactoryMethod\NotificationCreator;
use App\FactoryMethod\EmailNotification;

class EmailCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new EmailNotification;
    }
}