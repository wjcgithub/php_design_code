<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-20
 * Time: 下午5:02
 */

namespace Evolution\pdp\behavior_type\Command;


class HelloCommand implements CommandInterface
{
    protected $output;

    /**
     * 每一个具体的命令基于不同的Receiver
     * 它们可以是一个, 多个, 甚至完全没有Receiver
     *
     * HelloCommand constructor.
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * 执行并输出 "Hello World"
     */
    public function execute()
    {
        //没有Receiver的时候可以完全通过命令类来实现特定功能
        $this->output->write('Hello World');
    }
}