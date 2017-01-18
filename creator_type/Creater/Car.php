<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-27
     * Time: 下午5:52.
     *
     * license GPL
     */
    class Car
    {
        public $engine;
        public $color;
        public $wheel;

        public function show()
        {
            echo '我的汽车引擎是：'.$this->engine."\r\n";
            echo '我的汽车颜色是：'.$this->color."\r\n";
            echo '我的汽车有：'.$this->wheel."\r\n";
            echo "\r\n\r\n";
        }
    }
