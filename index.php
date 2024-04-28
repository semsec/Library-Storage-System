<?php


require __DIR__ . '/vendor/autoload.php';

(new \Src\App\CommandHandler\CommandHandler(__DIR__.'/commands.json'))->handel();


