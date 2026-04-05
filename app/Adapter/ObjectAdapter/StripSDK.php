<?php

namespace App\Adapter\ObjectAdapter;

class StripSDK
{
    public function makeCharge(int $valueInCents)
    {
        echo "Processing payment of $valueInCents via Strip";
    }
}