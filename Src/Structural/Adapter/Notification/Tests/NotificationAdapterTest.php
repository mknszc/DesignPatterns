<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification\Tests;

use DesignPatterns\Src\Structural\Adapter\Notification\FireBaseNotification;
use DesignPatterns\Src\Structural\Adapter\Notification\NotificationAdapter;
use PHPUnit\Framework\TestCase;

class NotificationAdapterTest extends TestCase
{
    public function testCanSend()
    {
        $fireBase = new FireBaseNotification();
        $notification = new NotificationAdapter($fireBase);

        $this->assertIsString($notification->send());
    }
}
