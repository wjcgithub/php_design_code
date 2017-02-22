<?php
namespace Evolution\pdp\behavior_type\Mediator\Subsystem;
use Evolution\pdp\behavior_type\Mediator\Colleague;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 下午2:01
 */
class Client extends Colleague
{
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }
}