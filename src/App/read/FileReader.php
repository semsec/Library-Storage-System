<?php

namespace Src\App\read;

interface FileReader
{
    function read(string $fileName);
}