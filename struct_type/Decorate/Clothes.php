<?php

    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-4
     * Time: 下午1:55.
     *
     * license GPL
     */
    class Clothes implements IComponent
    {
        protected $component;

        /**
         *
         *
         * @author: jichao.wang <braveontheroad@gmail.com>
         *
         * @param IComponent $component
         */
        public function Decorate(IComponent $component)
        {
            $this->component = $component;
        }

        /**
         * @author: jichao.wang <braveontheroad@gmail.com>
         */
        public function Display()
        {
            if (!empty($this->component)) {
                $this->component->Display();
            }
        }
    }
