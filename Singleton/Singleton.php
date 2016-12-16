<?php
namespace Evolution\pdp\Singleton;

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-4-27
     * Time: 下午5:50.
     *
     * license GPL
     */
    class Singleton
    {
        private static $instance;
        public $name = 'lisi';

        private function __construct()
        {
            echo 'can not instance me!';
        }

        private function __clone()
        {
            echo 'can not clone me!';
        }

        public static function getInstance()
        {
            if (empty(self::$instance)) {
                self::$instance = new Singleton();
            }

            return self::$instance;
        }
    }
