<?php

namespace Src\App;

class getBook
{
    public function findBook(array $books, $ISBN)
    {
        foreach ($books as $book) {
            if ($book->ISBN === $ISBN) {
                return $book;
            }
        }
        return null;
    }
}