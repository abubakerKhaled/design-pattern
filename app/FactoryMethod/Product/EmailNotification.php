<?php

namespace App\FactoryMethod\Product;
use App\FactoryMethod\Product\Notification;


class EmailNotification implements Notification
{
    public function send()
    {
        echo "Send email notification";
    }
}