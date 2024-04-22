<?php


require __DIR__ . '/vendor/autoload.php';


//,
//{
//    "ISBN": "978-1451733564",
//            "bookTitle": "mahdi",
//            "authorName": "Penelope Frost",
//            "pagesCount": 189,
//            "publishDate": "1973-08-23"
//        }

$bookData = (new \Src\App\DB\AllData())->getBooks();
$authors = new \Src\App\read\AuthorFile();
$authorsName = $authors->read();
//var_dump($authorsName);

//$display = new \Src\App\bookOperations\DisplayBooks();
//var_dump($display->display((array)$bookData, $authorsName));



//var_dump($data->getBooks());

$new = [
    "ISBN" => "978-1451733564",
    "bookTitle" => "mahdi",
    "authorName" => "Penelope Frost",
    "pagesCount" => 189,
    "publishDate" => "1973-08-23"
];

//(new \Src\App\bookOperations\AddBook($new))->add('database/books.json');


$get = (new \Src\App\bookOperations\GetBook())->findBook($bookData, '978-145173564');

var_dump($get);