<?php

namespace Src\App\Reader;

interface FileReader
{
    function read(string $fileName);
}