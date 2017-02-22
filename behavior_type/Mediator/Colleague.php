<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 下午1:59
 */

namespace Evolution\pdp\behavior_type\Mediator;


abstract class Colleague
{
    private $mediator;

    public function __construct(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    public function getMediator()
    {
        return $this->mediator;
    }
}