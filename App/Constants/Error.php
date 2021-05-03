<?php

declare(strict_types=1);

namespace App\Constants;

use EasySwoole\Skeleton\Framework\BaseEnum;

class Error extends BaseEnum
{
    /**
     * @Message("管理员不存在")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_NOT_FOUND = 'B-001-001-001';
   
    /**
     * @Message("管理员未启用, 请联系管理员")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_DISABLE = 'B-001-001-002';
   
    /**
     * @Message("用户名或密码错误")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_LOGIN_ACCOUNT_OR_PASSWORD_ERROR = 'B-001-001-003';
   
    /**
     * @Message("账号不存在，请联系管理员")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_LOGIN_ACCOUNT_NOT_FOUND = 'B-001-001-004';
   
    /**
     * @Message("管理员更新失败")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_UPDATE_FAIL = 'B-001-001-005';
   
    /**
     * @Message("管理员创建失败")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_CREATE_FAIL = 'B-001-001-006';
   
    /**
     * @Message("管理员删除失败")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_REMOVE_FAIL = 'B-001-001-007';
   
    /**
     * @Message("赋值权限错误")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_ASSIGN_ERROR = 'B-001-001-08';
   
    /**
     * @Message("管理员账号已存在")
     */
   const ERROR_APP_CONSTANTS_ERRORS_PLATFORM_PLATFORMERROR_ACCOUNT_EXIST = 'B-001-001-09';
   
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
