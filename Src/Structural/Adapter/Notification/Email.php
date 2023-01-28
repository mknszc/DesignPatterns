<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification;

class Email implements Notification
{
    public function send(): string
    {
        return 'Send Email';
    }
}
