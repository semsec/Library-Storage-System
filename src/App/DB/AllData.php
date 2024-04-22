<?php

namespace Src\App\DB;

use Src\App\read;

class AllData
{
    private array $booksDTO = [];
    public function __construct()
    {
        $js = new read\jsonReader();
        $csv = new read\csvReader();

        $js->read('database/books.json');
        $csv->read('database/books.csv');

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