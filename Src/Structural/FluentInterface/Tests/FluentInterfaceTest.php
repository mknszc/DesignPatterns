<?php

namespace DesignPatterns\Src\Structural\FluentInterface\Tests;

use DesignPatterns\Src\Structural\FluentInterface\User;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildUser()
    {
        $user = (new User())
            ->setUserName('Özcan')
            ->setWorkTitle('Software Developer');

        $this->assertSame('User name: Özcan, Work title: Software Developer', (string) $user);
    }
}
