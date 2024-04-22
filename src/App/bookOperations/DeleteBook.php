<?php

namespace Src\App\bookOperations;

use Src\App\validator\existenceValidator;
use Src\App\validator\isbnValidator;

interface DeleteBook
{
    function delete(string $ISBN);
}