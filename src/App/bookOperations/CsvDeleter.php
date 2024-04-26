<?php

namespace Src\App\bookOperations;

use Src\App\read\csvReader;

class CsvDeleter implements DeleteBook
{
    function delete(string $ISBN)
    {
        $readCsv = new csvReader();
        $readCsv->read(__DIR__.'\..\..\..\database\books.csv');
        $csvData = array($readCsv->getData());
        $csvData = $readCsv->getData();

        foreach ($csvData as $key => $data) {
            if ($data['ISBN'] == $ISBN) {
                echo 'Book information: <br>';
                print_r($data);
                unset($csvData[$key]);
            }
        }

        $csvFile = fopen(__DIR__.'\..\..\..\database\books.csv', 'w');
        fputcsv($csvFile, ['ISBN', 'bookTitle', 'authorName', 'pagesCount', 'publishDate']);
        foreach ($csvData as $row) {
            fputcsv($csvFile, $row);
        }
        fclose($csvFile);
    }
}