<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-27
     * Time: 下午5:53.
     *
     * license GPL
     */
    abstract class CarBuilder
    {
        /**
         * 汽车对象
         *
         * @var Car
         */
        protected $car;

        /**
         * construct.
         */
        public function __construct()
        {
            $this->car = new Car();
        }

        /**
         * 获取汽车对象
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         *
         * @return Car
         */
        public function getCar()
        {
            return $this->car;
        }

        abstract public function buildEngine();
        abstract public function buildColor();
        abstract public function buildWheel();
    }
