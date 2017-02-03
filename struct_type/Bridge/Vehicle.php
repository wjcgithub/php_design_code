<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-3
 * Time: 上午11:09
 */

namespace Evolution\pdp\struct_type\Bridge;


abstract class Vehicle
{
    protected $workShop1;
    protected $workShop2;

    protected function __construct(Workshop $workshop1, Workshop $workshop2)
    {
        $this->workShop1 = $workshop1;
        $this->workShop2 = $workshop2;
    }

    /**
     * 车辆制造
     */
    public function manufacture()
    {

    }
}