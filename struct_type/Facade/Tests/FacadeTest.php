<?php
namespace Evolution\pdp\struct_type\Facade;

use \Evolution\pdp\struct_type\Facade\FacadeMooc;


class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testFacade()
    {
        $clientObj = new FacadeMooc();
        $clientObj->studyEnglish();
        $clientObj->studyMath();
        $clientObj->studyComputer();
//
//        $singleObj2 = Singleton::getInstance();
//        $singleObj2->name = 'zhangsan';
//        $this->assertEquals('zhangsan', $singleObj2->name);
//        $this->assertEquals('zhangsan', $singleObj1->name);
//        $this->assertSame($singleObj1, $singleObj2);
    }
}