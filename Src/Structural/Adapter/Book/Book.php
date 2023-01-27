<?php

namespace DesignPatterns\Src\Structural\Adapter\Book;

interface Book
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}