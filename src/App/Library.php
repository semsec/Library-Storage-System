<?php
//
//namespace Src\App;
//
//class Library
//{
//    private array $bookData = [];
//    private array $authorsName = [];
//
//    public function __construct()
//    {
//        $bookDataObject = new AllData();
//        $authorsNameObject = new authors();
//        $this->bookData = $bookDataObject->getData();
//        $this->authorsName = $authorsNameObject->read('database/authors.json');
//    }
//
//    function bookList($authorName = null) : array
//    {
//        return array_filter($this->bookData, function ($book) use ($authorName) {
//            if ($book['authorName'] === $authorName);
//        });
//    }
//}