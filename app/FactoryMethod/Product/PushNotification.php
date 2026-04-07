<?php

namespace App\FactoryMethod\Product;

class PushNotification implements Notification
{
    public function send()
    {
        echo 'Send push notification';
    }
}
