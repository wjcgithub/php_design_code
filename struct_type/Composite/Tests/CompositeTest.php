<?php
namespace Evolution\pdp\struct_type\Composite\Tests;
use Evolution\pdp\struct_type\Composite\Form;
use Evolution\pdp\struct_type\Composite\InputElement;
use Evolution\pdp\struct_type\Composite\TextElement;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-4
 * Time: 上午11:18
 */
class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement());
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement());
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertRegExp('#^\s{4}#m', $form->render());
    }

}