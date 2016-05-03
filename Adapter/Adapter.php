<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-3
     * Time: 下午7:45.
     *
     * license GPL
     */
    class Adapter implements IPlayer
    {
        private $_player;

        public function __construct()
        {
            $this->_player = new Yaoming();
        }

        public function Attack()
        {
            $this->_player->Attack();
        }

        public function Defense()
        {
            $this->_player->Defense();
        }
    }
