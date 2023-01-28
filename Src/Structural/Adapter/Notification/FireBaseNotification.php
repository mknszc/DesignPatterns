<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification;

class FireBaseNotification implements FireBase
{
    public function login(): string
    {
        return 'Connect';
    }

    public function sendNotification(): string
    {
        return 'Send';
    }

    public function logout(): string
    {
        return 'Logout';
    }
}
