<?php

namespace DesignPatterns\Src\Structural\Adapter\Tests;

use DesignPatterns\Src\Structural\Adapter\TaxCalculator;
use DesignPatterns\Src\Structural\Adapter\TaxCalculatorAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $taxCalculator = new TaxCalculator();
        $taxCalculator->setAmount(100)->setRate(0.5);

        $taxCalculatorAdapter = new TaxCalculatorAdapter($taxCalculator);

        $this->assertSame($taxCalculator->calculate(), $taxCalculatorAdapter->calculate());
    }
}
