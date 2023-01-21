<?php

namespace DesignPatterns\Src\Structural\Adapter;

interface CalculatorAdapter
{
    public function calculate(): int|float;
}