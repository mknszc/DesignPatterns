<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification;

interface FireBase
{
    public function login(): string;

    public function sendNotification(): string;

    public function logout(): string;
}
