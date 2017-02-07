<?php
/**
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-7
 * Time: 下午2:02
 */

namespace Evolution\pdp\struct_type\DependencyInjection;


class Connection
{
    protected $configuration;

    protected $host;

    public function __construct(Parameters $config)
    {
        $this->configuration = $config;
    }

    public function connect()
    {
        $host = $this->configuration->get('host');
        $this->host = $host;
    }

    public function getHost()
    {
        return $this->host;
    }
}