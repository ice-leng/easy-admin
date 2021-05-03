<?php
/**
 * Created by PhpStorm.
 * User:  ice
 * Email: xykxyk2008@163.com
 * Date:  2021/4/12
 * Time:  10:28 下午
 */

namespace App\HttpController\Platform\V1;

use App\Service\Platform\PlatformService;
use EasySwoole\Component\Context\ContextManager;
use EasySwoole\HttpAnnotation\AnnotationTag\Api;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiDescription;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiGroup;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiGroupDescription;
use EasySwoole\HttpAnnotation\AnnotationTag\Di;
use EasySwoole\HttpAnnotation\AnnotationTag\InjectParamsContext;
use EasySwoole\HttpAnnotation\AnnotationTag\Method;
use EasySwoole\HttpAnnotation\AnnotationTag\Param;
use EasySwoole\HttpAnnotation\Swagger\Annotation\ApiSuccessTemplate;
use EasySwoole\Skeleton\Framework\BaseController;
use EasySwoole\Skeleton\Framework\BizException;

/**
 * @ApiGroup(groupName="登录")
 * @ApiGroupDescription("登录")
 */
class LoginController extends BaseController
{
    /**
     * @Di(key="PlatformService")
     * @var PlatformService
     */
    protected $loginService;

    /**
     * @Api(name="登录",path="/platform/v1/login")
     * @ApiDescription("管理员登录")
     * @Method(allow={POST})
     * @Param(name="account",alias="账号",description="账号",lengthMax="32",required="")
     * @Param(name="password",alias="密码",description="密码",lengthMax="32",required="")
     * @ApiSuccessTemplate(template="success", result={
     *      "token|token" : "xxxxx",
     *      "refreshToken|刷新token" : "xxxxx",
     *      "platform_name|管理员名称" : "xxxxx",
     *     })
     * @InjectParamsContext(key="data")
     * @return bool|void
     * @throws
     */
    public function index()
    {
        $params = ContextManager::getInstance()->get('data');
        $ip = $this->clientRealIP();
        $data = $this->loginService->login($params, $ip);
        return $this->success($data);
    }

    /**
     * 刷新token
     * @Api(name="刷新token", path="/platform/v1/login/refreshToken")
     * @Method(allow={POST})
     * @Param(name="token", alias="刷新token", description="刷新token", required="", notEmpty="")
     * @ApiSuccessTemplate(template="success", result={
     *      "token|token" : "xxxxx",
     *      "refreshToken|刷新token" : "xxxxx",
     *     })
     * @throws
     */
    public function refreshToken()
    {
        $ip = $this->clientRealIP();
        $refreshToken = $this->required('token');
        $data = $this->loginService->refreshToken($refreshToken, $ip);
        return $this->success($data);
    }

    /**
     * @Api(name="退出", path="/platform/v1/login/logout")
     * @Method(allow={POST})
     * @Param(name="token", alias="token", description="token", required="", notEmpty="")
     * @ApiSuccessTemplate(template="success")
     * @throws
     */
    public function logout()
    {
        $ip = $this->clientRealIP();
        $token = $this->required('token');
        $this->loginService->logout($token, $ip);
        return $this->success();
    }
}