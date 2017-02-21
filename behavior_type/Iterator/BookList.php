<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-21
 * Time: 下午2:08
 */

namespace Evolution\pdp\behavior_type\Iterator;


class BookList implements \Countable
{
    private $books = [];

    public function getBook($bookNumberToGet)
    {
        if (isset($this->books[$bookNumberToGet])) {
            return $this->books[$bookNumberToGet];
        }

        return null;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
    }

    public function count()
    {
        return count($this->books);
    }
}