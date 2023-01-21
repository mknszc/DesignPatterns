<?php

namespace DesignPatterns\Src\Structural\Adapter;

class TaxCalculatorAdapter implements CalculatorAdapter
{
    public function __construct(protected TaxCalculator $taxCalculator)
    {
    }

    public function calculate(): int|float
    {
        return $this->taxCalculator->getAmount() * $this->taxCalculator->getRate();
    }
}
