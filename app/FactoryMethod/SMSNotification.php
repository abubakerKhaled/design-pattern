<?php

namespace App\FactoryMethod;
use App\FactoryMethod\Notification;


class SMSNotification implements Notification
{
    public function send()
    {
        echo "Send sms notification";
    }
}
