<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-7-4
     * Time: 上午10:13
     *
     * license GPL
     */
    interface BaseStrategy
    {
        /**
         * 广告位1
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        public function showAdv1();

        /**
         * 广告位2
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        public function showAdv2();

        /**
         * 广告位3
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        public function showAdv3();
    }