<?php
//    include_once './vendor/autoload.php';

    include_once './IWeapons.php';
    include_once './IWeaponsFactory.php';
    include_once './AiguoWeapons.php';
    include_once './AiguoFactory.php';
    include_once './QingDanFactory.php';
    include_once './QingDanWeapons.php';

    $Qingdan = new QingDanFactory();
    $Aiguo = new AiguoFactory();

    $Q1 = $Qingdan->Make();
    $Q2 = $Qingdan->Make();

    $A1 = $Aiguo->Make();
    $A2 = $Aiguo->Make();

    $Q1->Launch();
    $Q2->Launch();
    $A1->Launch();
    $A2->Launch();
