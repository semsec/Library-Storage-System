<?php

namespace Src\App\validator;

class IsbnValidator
{
    public function validate($isbn)
    {
        $isbn = str_replace(['-', ' '], '', $isbn);

        if (!preg_match('/^978\d{10}$/', $isbn)) {
            return false;
        }

        return true;

    }
}