<?php

namespace Src\App;

class checkIfExists
{
    function checkIfExists($newBook) : bool
    {
        $database = (new AllData())->getBooks();
        foreach ($database as $book) {
            if ($book['ISBN'] === $newBook['ISBN']) {
                echo 'Book already is in our database';
                return false;
            };
        }
        return true;
    }

}