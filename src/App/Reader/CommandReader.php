<?php

namespace Src\App\Reader;

use mysql_xdevapi\Exception;

class CommandReader implements FileReader
{
    function read(string $fileName)
    {
        try {
            $commandFile = file_get_contents($fileName);

            if ($commandFile === false) {
                throw new \Exception('File does not exists');
            }
            return json_decode($commandFile, true);
        } catch (\Exception $e) {
            echo "Error exception : " . $e->getMessage();
        }

    }
}