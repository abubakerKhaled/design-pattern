<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Creator\EmailCreator;
use App\FactoryMethod\Creator\NotificationCreator;
use App\FactoryMethod\Creator\PushCreator;
use App\FactoryMethod\Creator\SMSCreator;
use InvalidArgumentException;

require_once __DIR__.'/../../vendor/autoload.php';

class Application
{
    private NotificationCreator $creator;

    public function initialize($type)
    {
        if ($type === 'email') {
            $this->creator = new EmailCreator;
        } elseif ($type === 'sms') {
            $this->creator = new SMSCreator;
        } elseif ($type === 'push') {
            $this->creator = new PushCreator;
        } else {
            throw new InvalidArgumentException('Unknown type');
        }
    }

    public function run()
    {
        $this->creator->notify();
    }
}

$app = new Application;
$app->initialize('email');
$app->run();
