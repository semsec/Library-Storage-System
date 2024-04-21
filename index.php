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
//var_dump($getBook->findBook($books, '978-0062316097'));

//$displayObj = new \Src\App\displayBooks();
//$displayObj->display($books, "Aldous Orson");

echo "<pre>";
//var_dump($books);
//var_dump($authorNames);

//$displayObj = new \Src\App\displayBooks();
//$filtered = $displayObj->display($books, $authorNames);
//var_dump($filtered);
$new = [
    "ISBN"=> "978-0735619678",
    "bookTitle" => '5',
    "authorName" => "Dastayofski",
    "pagesCount" => "412",
    "publishDate" => "1950-09-21"
];
$newBook = new \Src\App\addBook($new);
$newBook->add($new, 'database/books.json');
