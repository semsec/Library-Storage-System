<?php

namespace Src\App;

class jsonReader extends fileReader
{
    private array $data=[];
    function read(string $fileName) : void
    {
        try {
            $file = fopen($fileName, 'r');

            if(!$file) {
                throw new \Exception('unable to open file');
            }

            $jsonData = fread($file, filesize($fileName));

            fclose($file);
            $data = json_decode($jsonData, true);
            $this->data = $data['books'];
        }catch (\Exception $e) {
            echo "exception : " . $e->getMessage();
        }
    }
    public function getData() : array
    {
        return $this->data;
    }
}