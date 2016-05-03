<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-3
     * Time: 下午7:42.
     *
     * license GPL
     */
    class Forward implements IPlayer
    {
        public function Attack()
        {
            echo '前锋攻击<br/>';
        }

        public function Defense()
        {
            echo '前锋防御<br/>';
        }
    }
