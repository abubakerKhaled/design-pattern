<?php

namespace App\FactoryMethod\Creator;

use App\FactoryMethod\Product\Notification;

abstract class NotificationCreator
{
    abstract protected function createNotification(): Notification;

    public function notify()
    {
        $notifier = $this->createNotification();

        $notifier->send();
    }
}
