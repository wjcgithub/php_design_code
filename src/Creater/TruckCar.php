<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-27
     * Time: 下午6:11.
     *
     * license GPL
     */
    class TruckCar extends CarBuilder
    {
        /**
         * set engine.
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function buildEngine()
        {
            $this->car->engine = '26缸';
        }

        /**
         * set car color.
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function buildColor()
        {
            $this->car->color = '黑色';
        }

        /**
         * set car wheel.
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function buildWheel()
        {
            $this->car->wheel = '38个轮子';
        }
    }
