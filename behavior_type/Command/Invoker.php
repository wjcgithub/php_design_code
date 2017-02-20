<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 下午5:07
 */

namespace Evolution\pdp\behavior_type\Command;


class Invoker
{
    protected $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}