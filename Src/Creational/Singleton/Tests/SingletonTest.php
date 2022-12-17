<?php

namespace DesignPatterns\Src\Creational\Singleton\Tests;

use DesignPatterns\Src\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
	public function testSameObject()
	{
		$first = Singleton::getInstance();
		$second = Singleton::getInstance();

		$this->assertSame($first, $second);
	}
}
