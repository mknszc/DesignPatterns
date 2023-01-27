<?php

namespace DesignPatterns\Src\Structural\Adapter\Tests;

use DesignPatterns\Src\Structural\Adapter\EBookAdapter;
use DesignPatterns\Src\Structural\Adapter\Kindle;
use DesignPatterns\Src\Structural\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}
