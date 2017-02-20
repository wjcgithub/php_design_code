<?php
namespace Evolution\pdp\struct_type\proxy\Tests;
use Evolution\pdp\struct_type\proxy\RecordProxy;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 上午10:13
 */
class ProxyTest extends \PHPUnit_Framework_TestCase
{
    public function testSetAttribute()
    {
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue($proxy->xyz === false);
    }
}