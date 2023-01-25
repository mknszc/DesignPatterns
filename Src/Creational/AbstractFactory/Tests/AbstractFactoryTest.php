<?php

namespace DesignPatterns\Src\Creational\AbstractFactory\Tests;

use DesignPatterns\Src\Creational\AbstractFactory\CsvWriter;
use DesignPatterns\Src\Creational\AbstractFactory\JsonWriter;
use DesignPatterns\Src\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatterns\Src\Creational\AbstractFactory\WinWriterFactory;
use DesignPatterns\Src\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
