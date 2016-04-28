<?php
    include_once './Car.php';
    include_once './CarBuilder.php';
    include_once './SaloonCar.php';
    include_once './TruckCar.php';
    include_once './Director.php';

    $dirObj = new Director();
    $buildCar = $dirObj->construct(new SaloonCar());
    $buildCar->show();

    $buildCar = $dirObj->construct(new TruckCar());
    $buildCar->show();
