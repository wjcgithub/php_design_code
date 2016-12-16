<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-27
     * Time: 下午6:11.
     *
     * license GPL
     */
    class SaloonCar extends CarBuilder
    {
        /**
         * set engine.
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function buildEngine()
        {
            $this->car->engine = '8缸';
        }

        /**
         * set car color.
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function buildColor()
        {
            $this->car->color = '红色';
        }

        /**
         * set car wheel.
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function buildWheel()
        {
            $this->car->wheel = '8个轮子';
        }
    }
