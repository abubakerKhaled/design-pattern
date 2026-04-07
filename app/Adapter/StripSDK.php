<?php

namespace App\Adapter;

class StripSDK
{
    public function makeCharge(int $valueInCents)
    {
        echo "Processing payment of $valueInCents via Strip";
    }
}
