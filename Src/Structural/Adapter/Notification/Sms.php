<?php

namespace DesignPatterns\Src\Structural\Adapter\Notification;

class Sms implements Notification
{
    public function send() : string
    {
        return 'Send Sms';
    }
}
