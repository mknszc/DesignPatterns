<?php

namespace DesignPatterns\Src\Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}
