<?php

namespace DesignPatterns\Src\Creational\StaticFactory;

interface Formatter
{
    public function format(string $input): string;

}