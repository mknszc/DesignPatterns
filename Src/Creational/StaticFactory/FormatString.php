<?php

namespace DesignPatterns\Src\Creational\StaticFactory;

class FormatString implements Formatter
{

    public function format(string $input): string
    {
        return $input;
    }
}