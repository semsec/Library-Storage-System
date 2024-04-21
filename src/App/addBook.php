<?php

namespace Src\App;

class addBook
{
    private bool $checkIfValid;
    private bool $checkIfExists;
    public function __construct($newBook)
    {
        $this->checkIfValid = (new validator())->validateBookData($newBook);
        $this->checkIfExists = (new checkIfExists())->checkIfExists($newBook);
    }

    function add($newBook, $path)
    {
        if ($this->checkIfValid === false) {
            echo 'The format of book you providing is not expected';
            return;
        }
        $jsonFile = json_decode(file_get_contents($path), true);
        $jsonFile['books'][] = $newBook;
        file_put_contents($path, json_encode($jsonFile, JSON_PRETTY_PRINT));
    }



}