<?php

namespace DesignPatterns\Src\Structural\Facade\Tests;

use DesignPatterns\Src\Structural\Facade\Bios;
use DesignPatterns\Src\Structural\Facade\Facade;
use DesignPatterns\Src\Structural\Facade\OperatingSystem;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);

        $bios->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}
