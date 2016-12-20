<?php

namespace Evolution\pdp\Repository;

use Evolution\pdp\Repository\IStorage;

/**
 * MemoryStorage类
 * @package DesignPatterns\Repository
 */
class MemoryStorage implements IStorage
{

    private $data;
    private $lastId;

    public function __construct()
    {
        $this->data = array();
        $this->lastId = 0;
    }

    /**
     * {@inheritdoc}
     */
    public function persist($data)
    {
        $this->data[++$this->lastId] = $data;
        return $this->lastId;
    }

    /**
     * {@inheritdoc}
     */
    public function retrieve($id)
    {
        return isset($this->data[$id]) ? $this->data[$id] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
        if (!isset($this->data[$id])) {
            return false;
        }

        $this->data[$id] = null;
        unset($this->data[$id]);

        return true;
    }
}