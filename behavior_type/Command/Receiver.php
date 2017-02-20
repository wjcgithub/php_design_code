<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 下午5:03
 */

namespace Evolution\pdp\behavior_type\Command;


class Receiver
{
    public function write($str)
    {
        echo $str;
    }
}