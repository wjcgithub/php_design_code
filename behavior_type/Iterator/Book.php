<?php
namespace Evolution\pdp\behavior_type\Iterator;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-21
 * Time: 下午2:04
 */
class Book
{
    private $author;
    private $title;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorAndTitle()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}