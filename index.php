<?php


require __DIR__ . '/vendor/autoload.php';


//usort($bookDTO, function ($a, $b){
//    return $a->publishDate <=> $b->publishDate;
//});

echo "<pre>";
$DTO = new \Src\App\AllData();
$books = $DTO->getBooks();

$authorFile = new \Src\App\authorFile();
$authorNames = $authorFile->read();

$getBook = new \Src\App\getBook();
var_dump($getBook->findBook($books, '978-0062316097'));


var_dump($getBook);