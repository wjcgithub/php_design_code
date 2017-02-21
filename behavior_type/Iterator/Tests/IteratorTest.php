<?php
namespace Evolution\pdp\behavior_type\Iterator\Tests;

use Evolution\pdp\behavior_type\Iterator\Book;
use Evolution\pdp\behavior_type\Iterator\BookList;
use Evolution\pdp\behavior_type\Iterator\BookListIterator;
use Evolution\pdp\behavior_type\Iterator\BookListReverseIterator;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-21
 * Time: 下午2:19
 */
class IteratorTest extends \PHPUnit_Framework_TestCase
{
    protected $bookList;

    protected function setUp()
    {
        $this->bookList = new BookList();
        $this->bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $this->bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $this->bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));
    }

    public function expectedAuthors()
    {
        return array(
            'Learning PHP Design Patterns by William Sanders',
            'Professional Php Design Patterns by Aaron Saray',
            'Clean Code by Robert C. Martin'
        );
    }

    public function testUseAIteratorAndValidateAuthors($expected = [])
    {
        $expected = $this->expectedAuthors();
        $iterator = new BookListIterator($this->bookList);

        while ($iterator->valid()) {
            $expectedBook = array_shift($expected);
            $this->assertEquals($expectedBook, $iterator->current()->getAuthorAndTitle());
            $iterator->next();
        }
    }

    public function testUseAReverseIteratorAndValidateAuthors($expected=[])
    {
        $expected = $this->expectedAuthors();
        $iterator = new BookListReverseIterator($this->bookList);

        while ($iterator->valid()) {
            $expectedBook = array_pop($expected);
            $this->assertEquals($expectedBook, $iterator->current()->getAuthorAndTitle());
            $iterator->next();
        }
    }

    public function testBookRemove()
    {
        $this->bookList->removeBook($this->bookList->getBook(0));
        $this->assertEquals($this->bookList->count(), 2);
    }

}