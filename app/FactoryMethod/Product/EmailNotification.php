<?php

namespace App\FactoryMethod\Product;

class EmailNotification implements Notification
{
    public function send()
    {
        echo 'Send email notification';
    }
}
