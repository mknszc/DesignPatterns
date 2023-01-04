<?php

namespace DesignPatterns\Src\Creational\FactoryMethod;

class SuvFacory implements CarFactory
{
    public function makeCar(): Car
    {
        return new Suv();
    }
}
