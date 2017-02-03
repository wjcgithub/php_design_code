<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-3
 * Time: 上午11:07
 */

namespace Evolution\pdp\struct_type\Bridge;


class Produce implements Workshop
{
    public function work()
    {
        print "Produced";
    }
}