<?php

namespace App\FactoryMethod;
use App\FactoryMethod\Notification;


class PushNotification implements Notification
{
    public function send()
    {
        echo "Send push notification";
    }
}
