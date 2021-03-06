<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-3
 * Time: 上午11:12
 */

namespace Evolution\pdp\struct_type\Bridge;


class Motorcycle extends Vehicle
{
    public function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        parent::__construct($workshop1, $workshop2);
    }

    /**
     * 组装摩托车
     */
    public function manufacture()
    {
        print "Motorcycle ";
        $this->workShop1->work();
        $this->workShop2->work();
    }
}