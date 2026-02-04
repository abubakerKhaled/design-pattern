<?php

namespace App\FactoryMethod\Product;
use App\FactoryMethod\Product\Notification;


class PushNotification implements Notification
{
    public function send()
    {
        echo "Send push notification";
    }
}
