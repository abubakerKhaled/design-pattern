<?php

namespace App\FactoryMethod\Product;

class SMSNotification implements Notification
{
    public function send()
    {
        echo 'Send sms notification';
    }
}
