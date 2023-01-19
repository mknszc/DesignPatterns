<?php

namespace DesignPatterns\Src\Structural\DependencyInjection\Tests;

use DesignPatterns\Src\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Src\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertSame('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}
