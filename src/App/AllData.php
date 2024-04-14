<?php

namespace Src\App;

class AllData
{
    private array $combinedArray = [];
    public function __construct()
    {
        $js = new \Src\App\jsonReader();
        $csv = new \Src\App\csvReader();

        $js->read('database/books.json');
        $csv->read('database/books.csv');

        $this->combinedArray = array_merge( $js->getData(), $csv->getData());
    }

    public function getData() : array
    {
        return $this->combinedArray;
    }
}