<?php 
return [
    'Psr\\Container\\ContainerInterface' => 'EasySwoole\\HyperfOrm\\Container',
    'Hyperf\\Contract\\ConfigInterface' => 'EasySwoole\\HyperfOrm\\ConfigFactory',
    'Hyperf\\Database\\ConnectionResolverInterface' => 'EasySwoole\\HyperfOrm\\ConnectionResolver',
    'EasySwoole\\Skeleton\\Utility\\CloudStorage\\Impl\\AliyunOSS' => 'EasySwoole\\Skeleton\\Utility\\CloudStorage\\Impl\\AliyunOSS',
    'EasySwoole\\Skeleton\\Utility\\CloudStorage\\Impl\\QiNiuObject' => 'EasySwoole\\Skeleton\\Utility\\CloudStorage\\Impl\\QiNiuObject',
    'EasySwoole\\Skeleton\\Utility\\Sms\\Impl\\AliyunSms' => 'EasySwoole\\Skeleton\\Utility\\Sms\\Impl\\AliyunSms',
    'EasySwoole\\Skeleton\\Utility\\WeChat\\WeChat' => 'EasySwoole\\Skeleton\\Utility\\WeChat\\WeChat',
    'EasySwoole\\Skeleton\\Utility\\Alipay\\Alipay' => 'EasySwoole\\Skeleton\\Utility\\Alipay\\Alipay',
    'Psr\\SimpleCache\\CacheInterface' => 'EasySwoole\\Skeleton\\Component\\Cache\\SimpleCache',
];