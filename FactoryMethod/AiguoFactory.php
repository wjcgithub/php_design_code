<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-21
     * Time: 下午8:36
     *
     * license GPL
     */
    class AiguoFactory implements IWeaponsFactory
    {
        function Make(){
            return new AiguoWeapons();
        }
    }