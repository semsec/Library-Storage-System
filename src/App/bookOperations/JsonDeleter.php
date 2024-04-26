<?php

namespace Src\App\bookOperations;

use Src\App\read\JsonReader;

class JsonDeleter implements DeleteBook
{
    function delete(string $ISBN)
    {
        $jsonRead = new JsonReader();
        $jsonRead->read(__DIR__.'\..\..\..\database\books.json');
        $jsonData = $jsonRead->getData();
        $arr = [];
        foreach ($jsonData as $key => $data) {
            if ($data['ISBN'] == $ISBN) {
                echo 'Book information: <br>';
                print_r($data);
                unset($jsonData[$key]);
            }
        }

        foreach ($jsonData as $key => $data){
            $arr['books'][] = $data;
        }

        $jsonFile = json_encode($arr, JSON_PRETTY_PRINT);
        file_put_contents(__DIR__.'\..\..\..\database\books.json', $jsonFile);

    }
}