<?php
namespace Evolution\pdp\behavior_type\Mediator\Tests;
use Evolution\pdp\behavior_type\Mediator\Mediator;
use Evolution\pdp\behavior_type\Mediator\Subsystem\Client;
use Evolution\pdp\behavior_type\Mediator\Subsystem\Database;
use Evolution\pdp\behavior_type\Mediator\Subsystem\Server;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 下午2:10
 */
class MediatorTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    protected function setUp()
    {
        $media = new Mediator();
        $this->client = new Client($media);
        $media->setColleague(new Database($media), $this->client, new Server($media));
    }

    public function testOutPutHelloWorld()
    {
        $this->expectOutputString('Hello World');
        $this->client->request();
    }

}