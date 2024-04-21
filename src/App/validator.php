<?php

namespace Src\App;

class validator
{
    public function validateBookData(array $newBook): bool
    {
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
            is_string($newBook['ISBN']) &&
            is_string($newBook['bookTitle']) &&
            is_string($newBook['authorName']) &&
            is_int($newBook['pagesCount']) &&
            is_string($newBook['publishDate'])
        ) {
            return true;
        } else {
            return false;
        }
    return true;
    }
}