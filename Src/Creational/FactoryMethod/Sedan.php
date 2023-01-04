<?php

namespace DesignPatterns\Src\Creational\FactoryMethod;

class Sedan implements Car
{

    public function getType(): string
    {
        return 'Sedan';
    }
}
