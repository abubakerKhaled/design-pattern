<?php

namespace App\Adapter\ClassAdapter;

use App\Adapter\PaymentProcessor;
use App\Adapter\StripSDK;

class StripGateway extends StripSDK implements PaymentProcessor
{
    public function processPayment(float $amount)
    {
        $this->makeCharge((int) ($amount * 100));
    }
}