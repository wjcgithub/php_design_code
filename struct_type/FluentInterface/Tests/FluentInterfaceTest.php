<?php
namespace Evolution\pdp\struct_type\FluentInterface\Tests;
use Evolution\pdp\struct_type\FluentInterface\Sql;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-8
 * Time: 下午5:32
 */
class FluentInterfaceTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildSql()
    {
        $instance = new Sql();
        $query = $instance->select(['name', 'sex'])
                            ->from('user', 'u')
                            ->where('u.id = ?')
                            ->getQuery();

        $this->assertEquals('SELECT name,sex FROM user AS u WHERE u.id = ?', $query);
    }
}