<?php
    /**
     * Created by PhpStorm.
     * Author: evolution
     * Date: 16-5-4
     * Time: 下午1:52
     *
     * license GPL
     */
    require_once "IComponent.php";
    require_once "Clothes.php";
    require_once "Person.php";
    require_once "PiXie.php";
    require_once "QiuXie.php";

    $ls = new Person("李四");
    $ww = new Person("王五");

    $pixie = new PiXie();
    $qiuxie = new QiuXie();

    $pixie->Decorate($ls);
    $pixie->Display();
    $qiuxie->Decorate($ww);
    $qiuxie->Display();