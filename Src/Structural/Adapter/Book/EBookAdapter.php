<?php

namespace DesignPatterns\Src\Structural\Adapter\Book;

class EBookAdapter implements Book
{
    public function __construct(protected EBook $eBook)
    {
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}
