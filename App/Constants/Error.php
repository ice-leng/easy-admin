<?php

declare(strict_types=1);

namespace App\Constants;

use EasySwoole\Skeleton\Framework\BaseEnum;

class Error extends BaseEnum
{
    /**
     * @Message("成功")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_SUCCESS = '0';
   
    /**
     * @Message("系统错误")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_SERVER_ERROR = 'F-000-000-500';
   
    /**
     * @Message("错误的请求参数")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_INVALID_PARAMS = 'F-000-000-400';
   
    /**
     * @Message("请重新登录")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_INVALID_TOKEN = 'F-000-000-413';
   
    /**
     * @Message("请重新登录")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_TOKEN_EXPIRED = 'F-000-000-403';
   
    /**
     * @Message("未找到")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_SERVER_NOT_FOUND = 'F-000-000-404';
   
    /**
     * @Message("没权限")
     */
   const ERROR_EASYSWOOLE_SKELETON_ERRORS_COMMONERROR_SERVER_NOT_PERMISSION = 'F-000-000-401';
   
}
