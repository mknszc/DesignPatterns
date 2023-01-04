<?php

namespace DesignPatterns\Src\Creational\FactoryMethod;

class Suv implements Car
{
    public function getType(): string
    {
        return 'Suv';
    }
}
