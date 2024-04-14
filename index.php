<?php

use Src\App\Test;

require __DIR__ . '/vendor/autoload.php';

$dataObject = new \Src\App\AllData();

$bookData = $dataObject->getData();

//$bookDTO = array();
//
//foreach ($bookData as $data) {
//    $bookDTO[] = new \Src\App\bookDTO($data);
//}
//
//usort($bookDTO, function ($a, $b){
//    return $a->publishDate <=> $b->publishDate;
//});
//
//echo "<pre>";
//var_dump($bookDTO);

