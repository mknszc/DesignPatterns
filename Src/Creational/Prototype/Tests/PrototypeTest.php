<?php

namespace DesignPatterns\Src\Creational\Prototype\Tests;

use DesignPatterns\Src\Creational\Prototype\Phone;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanPhoneClone(): void
    {
        $phone = new Phone();
        $clonedPhone = clone $phone;

        self::assertEquals($clonedPhone->getId(), $phone->getId());
        self::assertEquals($clonedPhone->getName(), $phone->getName());
        self::assertEquals($clonedPhone->getColor(), $phone->getColor());
        self::assertEquals($clonedPhone, $phone);
        self::assertNotSame($clonedPhone, $phone);
    }
}
