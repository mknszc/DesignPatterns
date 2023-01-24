<?php

namespace DesignPatterns\Src\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}
