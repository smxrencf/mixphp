<?php

namespace mix\base;

/**
 * 组件基类
 * @author 刘健 <coder.liu@qq.com>
 */
class Component extends Object
{

    // 状态值
    const STATUS_ORIGINAL = 0;
    const STATUS_READY = 1;
    const STATUS_RUNNING = 2;

    // 组件状态
    private $_status = self::STATUS_ORIGINAL;

    // 获取状态
    public function getStatus()
    {
        return $this->_status;
    }

    // 设置状态
    public function setStatus($status)
    {
        $this->_status = $status;
    }

    // 初始化事件
    public function onInitialize()
    {
    }

    // 请求开始事件
    public function onRequestStart()
    {
    }

    // 请求结束事件
    public function onRequestEnd()
    {
    }

}
