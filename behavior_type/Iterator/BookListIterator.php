<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-21
 * Time: 下午2:14
 */

namespace Evolution\pdp\behavior_type\Iterator;


class BookListIterator implements \Iterator
{
    private $bookList;

    protected $currentBook = 0;

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    public function current()
    {
        return $this->bookList->getBook($this->currentBook);
    }

    public function next()
    {
        $this->currentBook++;
    }

    public function key()
    {
        return $this->currentBook;
    }

    public function valid()
    {
        return null != $this->bookList->getBook($this->currentBook);
    }

    public function rewind()
    {
        $this->currentBook = 0;
    }
}