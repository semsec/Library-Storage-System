<?php

namespace Src\App;

abstract class fileReader
{
    abstract function read(string $fileName);
}