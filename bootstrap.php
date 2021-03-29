<?php
//全局bootstrap事件
use EasySwoole\Command\CommandManager;
use EasySwoole\HyperfOrm\Command\ModelCommand;
use EasySwoole\Skeleton\Command\ErrorCodeCommand;

// command
CommandManager::getInstance()->addCommand(new ErrorCodeCommand());
CommandManager::getInstance()->addCommand(new ModelCommand());
