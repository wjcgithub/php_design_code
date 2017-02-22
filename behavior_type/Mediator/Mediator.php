<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 下午1:54
 */

namespace Evolution\pdp\behavior_type\Mediator;


use Evolution\pdp\behavior_type\Mediator\Subsystem\Client;
use Evolution\pdp\behavior_type\Mediator\Subsystem\Database;
use Evolution\pdp\behavior_type\Mediator\Subsystem\Server;

class Mediator implements MediatorInterface
{
    protected $server;

    protected $database;

    protected $client;

    public function setColleague(Database $database, Client $client ,Server $server)
    {
        $this->server=$server;
        $this->database=$database;
        $this->client=$client;
    }

    public function makeRequest()
    {
        return $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}