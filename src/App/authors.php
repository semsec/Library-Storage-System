<?php

namespace Src\App;


class authors extends fileReader
{
    private array $authorJson = [];
    function read(string $fileName) : array
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