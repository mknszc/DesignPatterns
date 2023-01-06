<?php

namespace DesignPatterns\Src\Creational\Prototype;

class Phone extends ProductPrototype
{
    protected int $id = 1;
    protected string $name = 'İphone';
    protected string $color = 'Midnight';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
