<?php

namespace Src\App\bookOperations;

use Src\App\read\csvReader;

class CsvDeleter implements DeleteBook
{
    private array $csvData;
    function delete(string $ISBN)
    {
        $readCsv = new csvReader();
        $readCsv->read(__DIR__.'\..\..\..\database\books.csv');
        $this->csvData = $readCsv->getData();

        foreach ($this->csvData as $key => $data) {
            if ($data['ISBN'] == $ISBN) {
                unset($this->csvData[$key]);
                break;
            }
//            print_r($data['ISBN']);
        }
        print_r($this->csvData);
    }
}