<?php

namespace Src\App;

class bookDTO
{
    public string $ISBN;
    public string $bookTitle;
    public string $authorName;
    public int $pagesCount;
    public string $publishDate;

    public function __construct(array $data)
    {
        $this->ISBN = $data['ISBN'] ?? null;
        $this->bookTitle = $data['bookTitle'] ?? null;
        $this->authorName = $data ['authorName'] ?? null;
        $this->pagesCount = (int) $data['pagesCount'] ?? null;
        $this->publishDate =  $data['publishDate'] ?? null;

    }
}