<?php
    include 'BaseStrategy.php';

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-7-4
     * Time: 上午11:16
     *
     * license GPL
     */
    class UType1Strategy implements BaseStrategy
    {
        /**
         * 广告位1
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        public function showAdv1(){
            echo '我是广告位1: 我负责显示类型1的广告';
        }

        /**
         * 广告位2
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        public function showAdv2(){
            echo '我是广告位2: 我负责显示类型2的广告';
        }

        /**
         * 广告位3
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        public function showAdv3(){
            echo '我是广告位3: 我负责显示类型3的广告';
        }
    }