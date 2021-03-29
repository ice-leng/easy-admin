<?php

namespace EasySwoole\EasySwoole;

use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\Skeleton\Utility\InitializeUtil;
use Swlib\SaberGM;

class EasySwooleEvent implements Event
{
    public static function initialize()
    {
        date_default_timezone_set('Asia/Shanghai');
        bcscale(2);
        SaberGM::default([
            'exception_report' => 0,
            'use_pool'         => true,
        ]);

        // cors
        InitializeUtil::cors();

        // config
        InitializeUtil::config(EASYSWOOLE_ROOT . '/App/Configs');

        // di
        InitializeUtil::di([
            EASYSWOOLE_ROOT . '/vendor/easyswoole/hyperf-orm/src/Configs',
            EASYSWOOLE_ROOT . '/vendor/easyswoole-tool/hyperf-orm-permission/src/Configs',
            EASYSWOOLE_ROOT . '/App/Configs',
        ]);

        // service
        $servicePath = EASYSWOOLE_ROOT . '/App/Service';
        InitializeUtil::serviceDi($servicePath, 'App\\Service');

        // redis
        InitializeUtil::redis();

        // mysql
        InitializeUtil::mysql();

        // scheduler
        InitializeUtil::scheduler();
    }

    public static function mainServerCreate(EventRegister $register)
    {

    }
}
