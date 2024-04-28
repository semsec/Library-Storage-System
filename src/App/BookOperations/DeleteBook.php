<?php

namespace Src\App\BookOperations;

use Src\App\Validator\existenceValidator;
use Src\App\Validator\isbnValidator;

interface DeleteBook
{
    function delete(string $ISBN);
}