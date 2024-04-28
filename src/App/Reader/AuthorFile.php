<?php

namespace Src\App\Reader;


class AuthorFile implements FileReader
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