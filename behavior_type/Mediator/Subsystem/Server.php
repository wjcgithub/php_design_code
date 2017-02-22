<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 下午2:06
 */

namespace Evolution\pdp\behavior_type\Mediator\Subsystem;

use Evolution\pdp\behavior_type\Mediator\Colleague;

class Server extends Colleague
{
     public function process()
     {
         $data = $this->getMediator()->queryDb();
         $this->getMediator()->sendResponse("Hello $data");
     }
}