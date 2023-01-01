<?php

namespace DesignPatterns\Src\Creational\StaticFactory\Tests;

use InvalidArgumentException;
use DesignPatterns\Src\Creational\StaticFactory\FormatNumber;
use DesignPatterns\Src\Creational\StaticFactory\FormatString;
use DesignPatterns\Src\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}
