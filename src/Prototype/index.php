<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-28
     * Time: 下午2:55.
     *
     * license GPL
     */
    include_once './Prototype.php';
    include_once 'Car.php';

    $carObj1 = new Car();
    $carObj1->carwheel = 4;

    $carObj2 = $carObj1->cloned();

    $carObj1->run();
    $carObj2->run();

    echo 'carObj1有'.$carObj1->carwheel.'个轮子'."\r\n";
    echo 'carObj2有'.$carObj2->carwheel.'个轮子'."\r\n";
