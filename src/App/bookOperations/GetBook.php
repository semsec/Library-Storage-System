<?php

namespace Src\App\bookOperations;

use Src\App\validator\isbnValidator;

class GetBook
{
    public function findBook(array $books, $ISBN)
    {
        $validator = (new isbnValidator())->validate($ISBN);
        if ($validator === true)
        {
            foreach ($books as $book) {
                if ($book->ISBN === $ISBN) {
                    return $book;
                }
            }
        }
        elseif ($validator === false) {
            return 'ISBN code you provided is not supported, please provide ISBN-13 format';
        }

    }
}