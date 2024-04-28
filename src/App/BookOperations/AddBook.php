<?php

namespace Src\App\BookOperations;

use Src\App\Validator\existenceValidator;
use Src\App\Validator\bookDataValidator;

class AddBook
{
    private bool $checkIfValid;
    private bool $checkIfExists;
    private array $newBook;
    public function __construct(array $newBook)
    {
        $this->checkIfValid = (new bookDataValidator())->validateBookData($newBook);
        $this->checkIfExists = (new existenceValidator())->checkIfExists($newBook);
        $this->newBook = $newBook;
    }

    function add($path) : void
    {
        if (!isset($this->newBook['ISBN'])) {
            return;
        }
        if ($this->checkIfExists === false) {
            return;
        }
        if ($this->checkIfValid === false) {
            echo 'The format of book you providing is not expected';
            return;
        }
        $jsonFile = json_decode(file_get_contents($path), true);
        $jsonFile['books'][] = $this->newBook;
        file_put_contents($path, json_encode($jsonFile, JSON_PRETTY_PRINT));
    }



}