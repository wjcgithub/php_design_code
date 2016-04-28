<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-27
     * Time: 下午6:20.
     *
     * license GPL
     */
    class Director
    {
        public function construct(CarBuilder $builder)
        {
            $builder->buildEngine();
            $builder->buildColor();
            $builder->buildWheel();

            return $builder->getCar();
        }
    }
