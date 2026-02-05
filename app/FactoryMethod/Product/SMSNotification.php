<?php

namespace App\FactoryMethod\Product;
use App\FactoryMethod\Product\Notification;


class SMSNotification implements Notification
{
    public function send()
    {
        echo "Send sms notification";
    }
}
