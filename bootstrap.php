<?php
//全局bootstrap事件

use EasySwoole\HyperfOrm\CommandUtility;
use EasySwoole\Skeleton\Command\ErrorCodeCommand;

// command
CommandUtility::getInstance()->init([
    new ErrorCodeCommand()
]);
