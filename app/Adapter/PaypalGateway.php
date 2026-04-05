<?php

namespace App\Adapter;

use App\Adapter\PaymentProcessor;
class PaypalGateway implements PaymentProcessor
{
    public function processPayment(float $amount)
    {
        echo "Processing payment of $amount via Paypal";
    }
}