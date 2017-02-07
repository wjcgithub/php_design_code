<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-7
 * Time: 下午1:57
 */

namespace Evolution\pdp\struct_type\DependencyInjection;


class ArrayConfig extends AbstractConfig implements Parameters
{
    public function get($key, $default = null){
        if (isset($this->storage[$key])){
            return $this->storage[$key];
        }

        return $default;
    }

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}