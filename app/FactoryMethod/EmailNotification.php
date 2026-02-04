<?php

namespace App\FactoryMethod;
use App\FactoryMethod\Notification;


class EmailNotification implements Notification
{
    public function send()
    {
        echo "Send email notification";
    }
}