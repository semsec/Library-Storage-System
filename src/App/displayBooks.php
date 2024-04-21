<?php

namespace Src\App;

class displayBooks
{
    function display(array $books, array $authors, ?string $authorName = null, int $page = 1, int $itemsPerPage = 10) : array
    {
        try {
            if ($authorName !== null && !in_array($authorName, $authors)) {
               throw new \Exception("There is no book by Author: $authorName");
            }
        } catch (\Exception $e) {
            echo "Exception -> " . $e->getMessage();
            exit();
        }

        if ($authorName !== null) {
            return array_filter($books, function ($book) use ($authorName) {
                return $book->authorName === $authorName;
            });
        }

        $start = ($page - 1) * $itemsPerPage;
        $paginateBooks = array_slice($books, $start, $itemsPerPage);
        return $paginateBooks;

    }
}