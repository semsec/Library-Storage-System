<?php

namespace Src\App\Validator;

class BookDataValidator
{
    public function validateBookData(array $newBook): bool
    {
        $isbn = (new isbnValidator())->validate($newBook['ISBN']);
        if (
            empty($newBook['ISBN']) ||
            empty($newBook['bookTitle']) ||
            empty($newBook['authorName']) ||
            empty($newBook['pagesCount']) ||
            empty($newBook['publishDate'])
        ) {
            return false;
        }

        if (
            (is_string($newBook['ISBN']) && $isbn) &&
            is_string($newBook['bookTitle']) &&
            is_string($newBook['authorName']) &&
            is_int($newBook['pagesCount']) &&
            is_string($newBook['publishDate'])
        ) {
            return true;
        } else {
            return false;
        }

    }
}