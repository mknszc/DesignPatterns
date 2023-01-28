<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification;

class NotificationAdapter implements Notification
{
    public function __construct(protected FireBase $fireBase)
    {
    }

    public function send(): string
    {
        $this->fireBase->login();
        $this->fireBase->sendNotification();
        $this->fireBase->logout();

        return 'Send With Firebase Notification';
    }
}
