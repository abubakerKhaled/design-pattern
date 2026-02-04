<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Creator\EmailCreator;
use App\FactoryMethod\Creator\PushCreator;
use App\FactoryMethod\Creator\SMSCreator;
use App\FactoryMethod\Creator\NotificationCreator;
use InvalidArgumentException;

require_once __DIR__ . '/../../vendor/autoload.php';

class Application
{
    private NotificationCreator $creator;

    public function initialize($type)
    {
        if ($type === 'email') {
            $this->creator = new EmailCreator();
        } else if ($type === 'sms') {
            $this->creator = new SMSCreator();
        } else if ($type === 'push') {
            $this->creator = new PushCreator();
        } else {
            throw new InvalidArgumentException("Unknown type");
        }
    }

    public function run()
    {
        $this->creator->notify();
    }
}

$app = new Application();
$app->initialize('email');
$app->run();