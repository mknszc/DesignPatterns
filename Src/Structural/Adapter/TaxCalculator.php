<?php

namespace DesignPatterns\Src\Structural\Adapter;

class TaxCalculator implements Calculator
{
    private int|float $amount;
    private int|float $rate;

    public function setAmount(int|float $amount): object
    {
        $this->amount = $amount;

        return $this;
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

    public function setRate(int|float $rate): object
    {
        $this->rate = $rate;

        return $this;
    }

    public function getRate(): int|float
    {
        return $this->rate;
    }

    public function calculate(): int|float
    {
        return $this->amount * $this->rate;
    }
}
