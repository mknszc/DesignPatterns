<?php

namespace DesignPatterns\Src\Creational\Prototype;

abstract class ProductPrototype
{
    protected int $id;
    protected string $name;
    protected string $color;

    abstract public function __clone();

    final public function getId(): int
    {
        return $this->id;
    }

    final public function getName(): string
    {
        return $this->name;
    }

    final public function getColor(): string
    {
        return $this->color;
    }

    final public function setId(int $id): void
    {
        $this->id = $id;
    }

    final public function setName(string $name): void
    {
        $this->name = $name;
    }

    final public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
