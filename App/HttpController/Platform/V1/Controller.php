<?php
/**
 * Created by PhpStorm.
 * User:  ice
 * Email: xykxyk2008@163.com
 * Date:  2021/4/12
 * Time:  10:28 下午
 */

namespace App\HttpController\Platform\V1;

use App\Constants\Errors\Platform\PlatformError;
use App\Model\Platform;
use App\Service\Platform\PlatformService;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiAuth;
use EasySwoole\HttpAnnotation\AnnotationTag\ApiDescription;
use EasySwoole\Skeleton\Constant\ActiveStatus;
use EasySwoole\Skeleton\Constant\SoftDeleted;
use EasySwoole\Skeleton\Framework\BaseController;
use EasySwoole\Skeleton\Framework\BizException;
use EasySwoole\Skeleton\Utility\Auth;
use Throwable;

class Controller extends BaseController
{
    protected $whiteList = [];

    /**
     * @ApiAuth(from={"HEADER"}, name="token", required="", notEmpty="token不能为空")
     * @ApiDescription("Token")
     *
     * @param string|null $action
     *
     * @return bool|null
     * @throws BizException|Throwable
     */
    public function onRequest(?string $action): ?bool
    {
        $token = $this->request()->getHeaderLine('token');
        if (empty($token) && in_array($action, $this->whiteList)) {
            return parent::onRequest($action);
        }
        $jwt = new Auth();
        $data = $jwt->verifyToken($token);
        if (!empty($data['platform_id'])) {
            $this->request()->withAttribute('platform_id', $data['platform_id']);
        }
        $account = $this->getAccount();
        // 账号未启用
        if ((int)$account->active === ActiveStatus::DISABLE) {
            throw new BizException(PlatformError::DISABLE);
        }
        if ((int)$account->enable !== SoftDeleted::ENABLE) {
            throw new BizException(PlatformError::LOGIN_ACCOUNT_NOT_FOUND);
        }
        return parent::onRequest($action);
    }

    /**
     * @return Platform|null
     */
    public function getAccount(): ?Platform
    {
        $platformId = $this->request()->getAttribute('platform_id');
        if (!$platformId) {
            return null;
        }
        $platform = $this->request()->getAttribute('platform');
        if (!$platform) {
            $platform = make(PlatformService::class)->findOne([
                'platform_id' => $platformId,
            ]);
            $this->request()->withAttribute('platform', $platform);
        }
        return $platform;
    }
}