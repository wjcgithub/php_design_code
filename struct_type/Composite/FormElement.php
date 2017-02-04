<?php
namespace Evolution\pdp\struct_type\Composite;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-4
 * Time: 上午11:09
 */
abstract class FormElement
{
    abstract public function render($indent = 0);
}