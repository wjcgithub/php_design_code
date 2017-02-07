<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-7
 * Time: 下午1:55
 */

namespace Evolution\pdp\struct_type\DependencyInjection;


interface Parameters
{
    public function get($key);

    public function set($key, $value);
}