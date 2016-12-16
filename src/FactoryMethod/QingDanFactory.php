<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-21
     * Time: 下午8:36.
     *
     * license GPL
     */
    class QingDanFactory implements IWeaponsFactory
    {
        public function Make()
        {
            return new QingDanWeapons();
        }
    }
