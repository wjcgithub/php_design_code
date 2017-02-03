<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-3
 * Time: 上午11:14
 */

namespace Evolution\pdp\struct_type\Bridge;


class Car extends Vehicle
{
    public function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        parent::__construct($workshop1, $workshop2);
    }

    public function manufacture()
    {
        print "Car ";
        $this->workShop1->work();
        $this->workShop2->work();
    }
}