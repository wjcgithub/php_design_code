<?php
namespace Evolution\pdp\struct_type\Registry\Tests;
use Evolution\pdp\struct_type\Registry\Registry;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 上午11:30
 */
class RegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, new \StdClass());

        $loggerObj = Registry::get(Registry::LOGGER);
        $this->assertInstanceOf('StdClass', $loggerObj);
    }
}