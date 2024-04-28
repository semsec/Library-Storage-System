<?php

namespace Src\App\DB;

use Src\App\Reader;

class AllData
{
    private array $booksDTO = [];
    public function __construct()
    {
        $js = new Reader\jsonReader();
        $csv = new Reader\csvReader();
        $js->read(__DIR__.'/../../../database/books.json');
        $csv->read(__DIR__.'/../../../database/books.csv');

        $temp = array_merge( $js->getData(), $csv->getData());
        foreach ($temp as $data) {
            $this->booksDTO[] = new bookDTO($data);
        }
    }
    public function getBooks()
    {
        return $this->booksDTO;
    }
}