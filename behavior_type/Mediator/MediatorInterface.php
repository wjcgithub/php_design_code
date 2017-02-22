<?php
namespace Evolution\pdp\behavior_type\Mediator;

/**
 * MediatorInterface是一个中介者契约
 * 该接口不是强制的，但是使用它更加符合里氏替换原则
 *
 * Created by PhpStorm.
 * User: evolution
 * Date: 17-2-22
 * Time: 上午11:51
 */
interface MediatorInterface
{
    /**
     * 发送相应
     * @param $content
     * @return mixed
     */
    public function sendResponse($content);

    /**
     * 发送请求
     * @return mixed
     */
    public function makeRequest();

    /**
     * 查询数据库
     * @return mixed
     */
    public function queryDb();
}