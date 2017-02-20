<?php
namespace Evolution\pdp\struct_type\ChainResponsibilities\Tests;
use Evolution\pdp\behavior_type\ChainResponsibilities\FastStorage;
use Evolution\pdp\behavior_type\ChainResponsibilities\Request;
use Evolution\pdp\behavior_type\ChainResponsibilities\SlowStorage;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 上午11:39
 */
class ChainTest extends \PHPUnit_Framework_TestCase
{
    protected $chain;

    protected function setUp()
    {
        $this->chain = new FastStorage(['bar'=>'baz']);
        $this->chain->append(new SlowStorage(['bar'=>'baz', 'foo'=>'bar']));
    }

    public function makeRequest()
    {
        $request = new Request();
        $request->verb = 'get';

        return [
            [$request]
        ];
    }

    public function testFastStorage($request=null)
    {
        $request = $this->makeRequest();
        $request->key = 'bar';
        $ret = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('baz', $request->response);
        $className = 'Evolution\pdp\struct_type\ChainResponsibilities\FastStorage';
        $this->assertEquals($className, $request->forDebugOnly);
    }

    public function testSlowStorage($request=null)
    {
        $request = $this->makeRequest();
        $request->key = 'foo';
        $ret = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('bar', $request->response);
        $className = 'Evolution\pdp\struct_type\ChainResponsibilities\SlowStorage';
        $this->assertEquals($className, $request->forDebugOnly);
    }

    public function testFailure($request=null)
    {
        $request = $this->makeRequest();
        $request->key = 'kukuku';
        $ret = $this->chain->handle($request);

        $this->assertFalse($ret);
        $className = 'Evolution\pdp\struct_type\ChainResponsibilities\SlowStorage';
        $this->assertEquals($className, $request->forDebugOnly);
    }
}