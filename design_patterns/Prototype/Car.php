<?php
/**
 * Created by PhpStorm.
 * Author: evolution
 * Date: 16-4-28
 * Time: 下午2:53.
 *
 * license GPL
 */
class Car extends Prototype
{

    public $carwheel = 0;

    public function cloned()
    {
        return clone $this;
    }

    public function run()
    {
        echo '汽车跑了'."\r\n";
    }
}
