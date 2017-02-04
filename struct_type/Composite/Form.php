<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-4
 * Time: 上午11:11
 */

namespace Evolution\pdp\struct_type\Composite;


class Form extends FormElement
{
    protected $elements;

    /**
     * 遍历所有元素并调用它们的render()方法, 然后返回返回完整的表单显示
     *
     * 但是从外部来看, 并没有看见组合过程, 就像是单个表单实例一样
     *
     * @param int $indent
     * @return string
     */
    public function render($indent = 0)
    {
        $formCode='';
        foreach ($this->elements as $element){
            $formCode .= $element->render($indent + 1) . PHP_EOL;
        }

        return $formCode;
    }

    /**
     * 添加form元素
     *
     * @param FormElement $element
     */
    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}