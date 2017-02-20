<?php
namespace Evolution\pdp\struct_type\Registry;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 上午11:27
 */
class Registry
{
    const LOGGER = 'logger';

    protected static $storedValues = [];

    public static function set($key, $value)
    {
        self::$storedValues[$key] = $value;
    }

    public static function get($key)
    {
        return self::$storedValues[$key];
    }
}