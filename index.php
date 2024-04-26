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
//$csvfile = new Src\App\read\CsvReader();
//$csvfile->read('database/books.csv');
//$csvData = $csvfile->getData();
//echo '<pre>';
//var_dump($csvData); exit();
$delete = new \Src\App\bookOperations\JsonDeleter();
echo '<pre>';
$delete->delete('978-0307594005');
//$content = file_get_contents('database/books.json');
//echo '<pre>';
//var_dump($content);

$data['books'] = [
    [
        "ISBN"=> "978-1451635626",
            "bookTitle"=> "Dystopian Chronicles",
            "authorName"=> "Aldous Orson",
            "pagesCount"=> 412,
            "publishDate"=> "1950-09-21"
        ],
        [
            "ISBN"=> "978-0061120084",
            "bookTitle"=> "Beyond the Horizon",
            "authorName"=> "Aldous Orson",
            "pagesCount"=> 294,
            "publishDate"=> "1962-03-17"
        ]
];
echo '<pre>';
print_r($data);

//$book = file_get_contents('database/books.json');
//$decode = json_decode($book , true);
//echo '<pre>';
//print_r($decode);