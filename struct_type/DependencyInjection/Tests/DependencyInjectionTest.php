<?php
namespace Evolution\pdp\struct_type\DependencyInjection\Tests;
use Evolution\pdp\struct_type\DependencyInjection\ArrayConfig;
use Evolution\pdp\struct_type\DependencyInjection\Connection;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-7
 * Time: 下午2:07
 */
class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    protected $config;
    protected $source;

    public function setUp()
    {
        $this->source = include dirname(__DIR__).'/config.php';
        $this->config = new ArrayConfig($this->source);
    }

    public function testDependencyInjection()
    {
        $connection = new Connection($this->config);
        $connection->connect();
        $this->assertEquals($this->source['host'], $connection->getHost());
    }
}