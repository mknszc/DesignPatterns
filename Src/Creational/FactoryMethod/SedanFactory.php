<?php

namespace DesignPatterns\Src\Creational\FactoryMethod;

class SedanFactory implements CarFactory
{
    public function makeCar(): Car
    {
        return new Sedan();
    }
}
