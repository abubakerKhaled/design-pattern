<?php

namespace App\Adapter;

interface PaymentProcessor
{
    public function processPayment(float $amount);
}