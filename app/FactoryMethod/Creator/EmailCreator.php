<?php

namespace App\FactoryMethod\Creator;
use App\FactoryMethod\Creator\NotificationCreator;
use App\FactoryMethod\Product\EmailNotification;
use App\FactoryMethod\Product\Notification;

class EmailCreator extends NotificationCreator
{
    protected function createNotification(): Notification
    {
        return new EmailNotification;
    }
}