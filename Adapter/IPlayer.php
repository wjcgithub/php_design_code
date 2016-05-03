<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-3
     * Time: 下午7:40
     *
     * license GPL
     */
    interface IPlayer
    {
        /**
         * 攻击
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        function Attack();

        /**
         * 防守
         * @author: jichao.wang <braveontheroad@gmail.com>
         * @return mixed
         */
        function Defense();
    }