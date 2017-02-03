<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-3
 * Time: 上午11:06
 */

namespace Evolution\pdp\struct_type\Bridge;


class Assemble implements Workshop
{
    public function work()
    {
        print "Assembled";
    }
}