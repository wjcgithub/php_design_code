<?php
namespace Evolution\pdp\behavior_type\Command\Tests;
use Evolution\pdp\behavior_type\Command\HelloCommand;
use Evolution\pdp\behavior_type\Command\Invoker;
use Evolution\pdp\behavior_type\Command\Receiver;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 下午5:12
 */
class CommandTest extends \PHPunit_Framework_TestCase
{
    protected $invoker;

    protected $receiver;

    protected function setUp()
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->expectOutputString('Hello World');
        $this->invoker->run();
    }
}