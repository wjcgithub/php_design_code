<?php
namespace Evolution\pdp\struct_type\proxy;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-10
 * Time: 下午2:14
 */
class Record
{
    protected $data;

    public function __construct($data = null)
    {
        $this->data = (Array) $data;
    }

    public function __set($name, $value)
    {
        $this->data[(string) $name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[(string) $name];
        } else {
            return null;
        }
    }
}