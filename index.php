<?php
include 'vendor/autoload.php';

use Evolution\pdp\Singleton\Singleton;

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);
echo $baseDir."\r\n";

die;
 $singleObj1 = Singleton::getInstance();
    $singleObj1->name = 'wjc';

    $singleObj2 = Singleton::getInstance();
    $singleObj2->name = 'zhangsan';


    echo '对象$singleObj1 的name 为：'.$singleObj1->name."\r\n";
    echo '对象$singleObj2 的name 为：'.$singleObj2->name."\r\n";