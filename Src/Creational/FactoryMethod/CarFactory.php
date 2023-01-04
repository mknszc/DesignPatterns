<?php

namespace DesignPatterns\Src\Creational\FactoryMethod;

interface CarFactory
{
    public function makeCar(): Car;
}
