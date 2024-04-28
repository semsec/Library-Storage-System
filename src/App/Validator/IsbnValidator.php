<?php

namespace Src\App\Validator;

class IsbnValidator
{
    public function validate($isbn)
    {
        $isbn = str_replace(['-', ' '], '', $isbn);
//        var_dump($isbn); exit();
        if (!preg_match('/^978\d{10}$/', $isbn)) {
            return false;
        }

        return true;

    }
}