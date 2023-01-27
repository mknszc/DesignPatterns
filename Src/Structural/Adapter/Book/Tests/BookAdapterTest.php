<?php

namespace DesignPatterns\Src\Structural\Adapter\Book\Tests;

use DesignPatterns\Src\Structural\Adapter\Book\EBookAdapter;
use DesignPatterns\Src\Structural\Adapter\Book\Kindle;
use DesignPatterns\Src\Structural\Adapter\Book\PaperBook;
use PHPUnit\Framework\TestCase;

class BookAdapterTest extends TestCase
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
