<?php
    include_once('../vendor/autoload.php');

    $Qingdan = new QingDanFactory();
    $Aiguo = new AiguoFactory();

    $Qingdan->Make();
    $Aiguo->Make();