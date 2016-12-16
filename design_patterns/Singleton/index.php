<?php
/**
 * Created by PhpStorm.
 * Author: evolution
 * Date: 16-4-28
 * Time: 上午10:56.
 *
 * license GPL
 */
include_once './Singleton.php';

    $singleObj1 = Singleton::getInstance();
    $singleObj1->name = 'wjc';

    $singleObj2 = Singleton::getInstance();
    $singleObj2->name = 'zhangsan';


    echo '对象$singleObj1 的name 为：'.$singleObj1->name."\r\n";
    echo '对象$singleObj2 的name 为：'.$singleObj2->name."\r\n";

    /**
     * 如果两个name 相同（zhangsan） 说明使用的是同一个对象
     *
     * 如果两个name 不同 说明使用的是不同的对象
     */