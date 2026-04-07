<?php

namespace App\Adapter;

use App\Adapter\ClassAdapter\StripGateway as ClassStripGateway;
use App\Adapter\ObjectAdapter\StripGateway as ObjectStripGateway;
use InvalidArgumentException;

require_once __DIR__.'/../../vendor/autoload.php';

class Application
{
    private PaymentProcessor $processor;

    public function initialize($type)
    {
        if ($type === 'paypal') {
            $this->processor = new PaypalGateway;
        } elseif ($type === 'stripe_object') {
            $this->processor = new ObjectStripGateway(new StripSDK);
        } elseif ($type === 'stripe_class') {
            $this->processor = new ClassStripGateway;
        } else {
            throw new InvalidArgumentException('Unknown gateway');
        }
    }

    public function process(float $amount)
    {
        $this->processor->processPayment($amount);
        echo "\n";
    }
}

// Verification Script
$app = new Application;

echo "--- Testing Paypal Gateway ---\n";
$app->initialize('paypal');
$app->process(100.50);

echo "--- Testing Stripe Object Adapter ---\n";
$app->initialize('stripe_object');
$app->process(250.75);

echo "--- Testing Stripe Class Adapter ---\n";
$app->initialize('stripe_class');
$app->process(99.99);
