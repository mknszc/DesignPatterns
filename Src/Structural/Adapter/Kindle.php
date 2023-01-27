<?php

namespace DesignPatterns\Src\Structural\Adapter;

class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function unlock()
    {
    }

    public function pressNext()
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
