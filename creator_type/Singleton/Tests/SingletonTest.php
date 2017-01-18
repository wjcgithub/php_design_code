<?php
namespace Evolution\pdp\Singleton\Tests;

use Evolution\pdp\creator_type\Singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateHtmlText()
    {
        $singleObj1 = Singleton::getInstance();
        $singleObj1->name = 'wjc';

        $singleObj2 = Singleton::getInstance();
        $singleObj2->name = 'zhangsan';
        $this->assertEquals('zhangsan', $singleObj2->name);
        $this->assertEquals('zhangsan', $singleObj1->name);
        $this->assertSame($singleObj1, $singleObj2);
    }
}