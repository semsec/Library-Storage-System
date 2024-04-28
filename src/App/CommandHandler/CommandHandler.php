<?php

namespace Src\App\CommandHandler;

use Src\App\BookOperations\AddBook;
use Src\App\BookOperations\CsvDeleter;
use Src\App\BookOperations\DisplayBooks;
use Src\App\BookOperations\GetBook;
use Src\App\BookOperations\JsonDeleter;
use Src\App\DB\AllData;
use Src\App\Reader\AuthorFile;
use Src\App\Reader\CommandReader;
use Src\App\Reader\CsvReader;
use Src\App\Reader\JsonReader;

class CommandHandler
{
    private $commandFile;

    public function __construct($commandFile)
    {
        $this->commandFile = (new CommandReader())->read(__DIR__. '/../../../commands.json');
    }

    function handel()
    {
        $command_name = $this->commandFile['command_name'];
        $parameters = $this->commandFile['parameters'];
        $books = (new AllData())->getBooks();
        $authors = (new AuthorFile())->read(__DIR__.'/../../../database/authors.json');
        switch ($command_name) {
            case 'addBook':
                $newBook = $parameters;
                $bookObject = new AddBook($newBook);
                $bookObject->add(__DIR__.'/../../../database/books.json');
                break;
            case 'getBook':
                $ISBN = $parameters;
                $getBook = (new GetBook())->findBook($books,$ISBN);
                echo '<pre>';
                print_r($getBook);
                break;
            case 'displayBook':
                //, $parameters['authorName'], $parameters['page'], (int) $parameters['itemPerPage']
                $display = (new DisplayBooks())->display($books, $authors);
                echo '<pre>';
                print_r($display);
                break;
            case 'deleteBook':
                $csvObject = new CsvReader();
                $csvObject->read(__DIR__.'/../../../database/books.csv');
                $csvData = $csvObject->getData();
                $jsonObject = new JsonReader();
                $jsonObject->read(__DIR__.'/../../../database/books.json');
                $jsonData = $jsonObject->getData();
                $ISBN = $parameters;
                $existenceInCsv = false;
                foreach ($csvData as $key => $value) {
                    if ($value['ISBN'] === $ISBN) {
                        $existenceInCsv = true;
                        break;
                    }
                }
                $existenceInJson = false;
                foreach ($jsonData as $key => $value) {
                    if ($value['ISBN'] === $ISBN) {
                        $existenceInJson = true;
                        break;
                    }
                }
                if ($existenceInCsv) {
                    (new CsvDeleter())->delete($ISBN);
                } elseif ($existenceInJson) {
                    (new JsonDeleter())->delete($ISBN);
                } else {
                    echo 'book not found';
                }
                break;
        }

    }
}