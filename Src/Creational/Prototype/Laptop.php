<?php

namespace DesignPatterns\Src\Creational\Prototype;

class Laptop extends ProductPrototype
{
    protected int $id = 2;
    protected string $name = 'MacBook';
    protected string $color = 'Space Gray';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
