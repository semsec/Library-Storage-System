<?php

namespace Src\App\Reader;

class CsvReader implements FileReader
{
    private array $data=[];
    function read($fileName) : void
    {
        $temp = [];
        $csvFile = array_map("str_getcsv", file($fileName));

        $keys = array_shift($csvFile);

        foreach ($csvFile as $value){
            $raw = array_combine($keys, $value);
            $temp[] = $raw;
        }
        $this->data = $temp;
    }

    public function getData() : array
    {
        return $this->data;
    }
}