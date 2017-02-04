<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-4
 * Time: 上午11:15
 */

namespace Evolution\pdp\struct_type\Composite;


class InputElement extends FormElement
{
    /**
     * 渲染input元素HTML
     *
     * @param int $indent
     * @return string
     */
    public function render($indent = 0)
    {
        return str_repeat(' ', $indent) . '<input type="text" />';
    }
}