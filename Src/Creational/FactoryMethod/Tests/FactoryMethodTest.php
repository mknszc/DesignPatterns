<?php

namespace DesignPatterns\Src\Creational\FactoryMethod\Tests;

use DesignPatterns\Src\Creational\FactoryMethod\Sedan;
use DesignPatterns\Src\Creational\FactoryMethod\SedanFactory;
use DesignPatterns\Src\Creational\FactoryMethod\Suv;
use DesignPatterns\Src\Creational\FactoryMethod\SuvFacory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCrateSedan()
    {
        $factory = new SedanFactory();
        $car = $factory->makeCar();

        $this->assertInstanceOf(Sedan::class, $car);
    }

    public function testCanCrateSuv()
    {
        $factory = new SuvFacory();
        $car = $factory->makeCar();

        $this->assertInstanceOf(Suv::class, $car);
    }
}
