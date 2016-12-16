<?php
    header("Content-Type:text/html;charset=utf-8");
    //------------------------原型模式测试代码------------------
    require_once "IPlayer.php";
    require_once "Adapter.php";
    require_once "Center.php";
    require_once "Forward.php";
    require_once "Yaoming.php";

    $player1=new Forward();

    echo "前锋上场:<br/>";
    $player1->Attack();
    $player1->Defense();

    echo "<hr/><br/>\r\n";

    echo "姚明上场:<br/>";
    $yaoming=new Adapter();
    $yaoming->Attack();
    $yaoming->Defense();

    echo "<hr/><br/>\r\n";
