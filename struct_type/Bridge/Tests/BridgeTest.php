<?php
namespace Evolution\pdp\struct_type\Bridge\Tests;
use Evolution\pdp\struct_type\Bridge\Assemble;
use Evolution\pdp\struct_type\Bridge\Car;
use Evolution\pdp\struct_type\Bridge\Motorcycle;
use Evolution\pdp\struct_type\Bridge\Produce;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-3
 * Time: 上午11:23
 */
class BridgeTest extends \PHPUnit_Framework_TestCase
{
    public function testCar()
    {
        $vehicle = new Car(new Produce(), new Assemble());
        $this->expectOutputString('Car Produced Assembled');
        $vehicle->manufacture();
    }

    public function testMotorcycle()
    {
        $vehicle = new Motorcycle(new Produce(), new Assemble());
        $this->expectOutputString('Motorcycle Produced Assembled');
        $vehicle->manufacture();
    }

}