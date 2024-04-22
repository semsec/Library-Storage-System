<?php

namespace Src\App\DB;


use Src\App\read\fileReader;

class AuthorFile implements fileReader
{
    public array $authorJson = [];
    function read(string $fileName = 'database/authors.json') : array
    {
        try {
            $file = fopen($fileName, 'r');

            if(!$file) {
                throw new \Exception('unable to open file');
            }

            $jsonData = fread($file, filesize($fileName));

            fclose($file);
            $data = json_decode($jsonData, true);
            $this->authorJson = $data['authors'];
        }catch (\Exception $e) {
            echo "exception : " . $e->getMessage();
        }

        return $this->authorJson;
    }
}