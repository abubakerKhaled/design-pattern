<?php

namespace App\FactoryMethod;
use App\FactoryMethod\Notification;

abstract class NotificationCreator
{
    abstract protected function createNotification(): Notification;

    public function notify()
    {
        $notifier = $this->createNotification();

        $notifier->send();
    }
}
