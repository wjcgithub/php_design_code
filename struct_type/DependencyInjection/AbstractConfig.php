<?php
namespace Evolution\pdp\struct_type\DependencyInjection;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-7
 * Time: 下午1:48
 */
abstract class AbstractConfig
{
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}