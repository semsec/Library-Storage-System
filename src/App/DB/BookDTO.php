<?php

namespace Src\App\DB;

class BookDTO
{
    public ?string $ISBN;
    public ?string $bookTitle;
    public ?string $authorName;
    public ?int $pagesCount;
    public ?string $publishDate;

    public function __construct(array $data)
    {
        $this->ISBN = $data['ISBN'];
        $this->bookTitle = $data['bookTitle'];
        $this->authorName = $data ['authorName'];
        $this->pagesCount = (int) $data['pagesCount'];
        $this->publishDate =  $data['publishDate'];
    }
}