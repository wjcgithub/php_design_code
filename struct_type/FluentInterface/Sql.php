<?php
namespace Evolution\pdp\struct_type\FluentInterface;

/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-8
 * Time: 下午5:26
 */
class Sql
{
    protected $fields = [];
    protected $from = [];
    protected $where = [];

    public function select(array $fields=[])
    {
        $this->fields = $fields;

        return $this;
    }

    public function from($table, $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    public function where($condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    public function getQuery()
    {
        return 'SELECT ' . implode(',', $this->fields)
                . ' FROM ' . implode(',', $this->from)
                . ' WHERE ' . implode(',', $this->where);
    }
}