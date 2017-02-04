<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-4
 * Time: 上午11:16
 */

namespace Evolution\pdp\struct_type\Composite;


class TextElement extends FormElement
{
    /**
     * 渲染文本元素
     *
     * @param int $indent
     * @return string
     */
    public function render($indent = 0)
    {
        return str_repeat(' ', $indent) . 'this is a test element';
    }
}