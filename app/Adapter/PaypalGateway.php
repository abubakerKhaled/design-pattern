<?php

namespace App\Adapter;

class PaypalGateway implements PaymentProcessor
{
    public function processPayment(float $amount)
    {
        echo "Processing payment of $amount via Paypal";
    }
}
