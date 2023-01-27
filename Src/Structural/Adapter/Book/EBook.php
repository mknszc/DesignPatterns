<?php

namespace DesignPatterns\Src\Structural\Adapter\Book;

interface EBook
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}
