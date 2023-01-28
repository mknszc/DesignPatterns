<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification;

interface Notification
{
    public function send(): string;
}