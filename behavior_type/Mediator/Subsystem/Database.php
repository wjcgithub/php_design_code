<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 下午2:05
 */

namespace Evolution\pdp\behavior_type\Mediator\Subsystem;

use Evolution\pdp\behavior_type\Mediator\Colleague;

class Database extends Colleague
{
    public function getData()
    {
        return "World";
    }
}