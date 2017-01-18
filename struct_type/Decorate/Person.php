<?php
    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-4
     * Time: 下午1:52.
     *
     * license GPL
     */
    class Person implements IComponent
    {
        private $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function Display()
        {
            echo "装扮的：{$this->name}\r\n";
        }
    }
