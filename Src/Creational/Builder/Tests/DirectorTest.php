<?php

namespace DesignPatterns\Src\Creational\Builder\Tests;

use DesignPatterns\Src\Creational\Builder\Car;
use DesignPatterns\Src\Creational\Builder\CarBuilder;
use DesignPatterns\Src\Creational\Builder\Director;
use DesignPatterns\Src\Creational\Builder\Truck;
use DesignPatterns\Src\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
