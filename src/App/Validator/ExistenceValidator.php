<?php

namespace Src\App\Validator;

use Src\App\DB\AllData;

class ExistenceValidator
{
    function checkIfExists($newBook) : bool
    {
        $validate = (new isbnValidator())->validate($newBook['ISBN']);
        $database = (new AllData())->getBooks();
        if (isset($newBook['ISBN'])) {
            foreach ($database as $book) {
                if ($book->ISBN === $newBook['ISBN']  && $validate) {
                    echo 'Book already exists';
                    return false;
                };
            }
            if ($validate) {
                return 'ISBN code you provided is not supported, please provide ISBN13 format';
            }

        } else {
            return false;
        }

        return true;
    }

}