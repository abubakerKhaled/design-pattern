<?php

namespace App\Adapter\ObjectAdapter;

use App\Adapter\PaymentProcessor;
use App\Adapter\StripSDK;

class StripGateway implements PaymentProcessor
{
    public function __construct(private StripSDK $stripSdk) {}

    public function processPayment(float $amount)
    {
        echo "Convert $amount to cents";
        $this->stripSdk->makeCharge((int) ($amount * 100));
    }
}
