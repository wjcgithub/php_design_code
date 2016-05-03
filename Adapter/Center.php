<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-3
     * Time: 下午7:42.
     *
     * license GPL
     */
    class Center implements IPlayer
    {
        public function Attack()
        {
            echo '中锋攻击<br/>';
        }

        public function Defense()
        {
            echo '中锋防御<br/>';
        }
    }
