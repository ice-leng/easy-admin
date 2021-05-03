<?php
/**
 * Created by PhpStorm.
 * User:  ice
 * Email: xykxyk2008@163.com
 * Date:  2021/4/19
 * Time:  11:31 下午
 */

namespace App\Service\Platform;

use App\Constants\Errors\Platform\PlatformError;
use App\Model\Platform;
use EasySwoole\Redis\Exception\RedisException;
use EasySwoole\Skeleton\Constant\ActiveStatus;
use EasySwoole\Skeleton\Constant\SoftDeleted;
use EasySwoole\Skeleton\Framework\BaseService;
use EasySwoole\Skeleton\Framework\BizException;
use EasySwoole\Skeleton\Helpers\PasswordHelper;
use EasySwoole\Skeleton\Utility\Auth;

class PlatformService extends BaseService
{
    /**
     * @param array          $params
     * @param array|string[] $field
     *
     * @return Platform
     * @throws BizException
     */
    public function findOne(array $params, array $field = ['*']): Platform
    {
        $model = Platform::findOneCondition([
            'platform_id' => $params['platform_id'],
        ]);
        if (!$model) {
            throw new BizException(PlatformError::NOT_FOUND);
        }
        return $model;
    }

    /**
     * @param array  $params
     * @param string $ip
     *
     * @return array
     * @throws BizException
     * @throws RedisException
     */
    public function login(array $params, string $ip): array
    {
        $account = Platform::query()->select([
            'platform_id',
            'password',
            'active',
            'platform_name',
            'last_time',
        ])->where([
            'account' => $params['account'],
            'enable'  => SoftDeleted::ENABLE,
        ])->first();

        if (!$account) {
            throw new BizException(PlatformError::LOGIN_ACCOUNT_OR_PASSWORD_ERROR);
        }

        $check = PasswordHelper::verifyPassword($params['password'], $account->password);
        if (!$check) {
            throw new BizException(PlatformError::LOGIN_ACCOUNT_OR_PASSWORD_ERROR);
        }

        if ((int)$account->active !== ActiveStatus::ENABLE) {
            throw new BizException(PlatformError::LOGIN_ACCOUNT_NOT_FOUND);
        }

        $auth = new Auth();
        $token = $auth->generate([
            'platform_id' => $account->platform_id,
        ]);

        $status = $account->update([
            'last_time' => time(),
        ]);
        if (!$status) {
            throw new BizException(PlatformError::UPDATE_FAIL);
        }
        return [
            'token'         => $token,
            'refreshToken'  => $auth->generateRefreshToken($token),
            'platform_name' => $account->platform_name,
        ];
    }

    /**
     * 刷新token
     *
     * @param string $refreshToken
     * @param string $ip
     *
     * @return array
     * @throws BizException
     * @throws RedisException
     */
    public function refreshToken(string $refreshToken, string $ip): array
    {
        // todo 登录日志
        $auth = new Auth();
        $token = $auth->refreshToken($refreshToken);
        return [
            'token'        => $token,
            'refreshToken' => $refreshToken,
        ];
    }

    /**
     * 退出
     *
     * @param string $token
     * @param string $ip
     *
     * @return bool
     */
    public function logout(string $token, string $ip): bool
    {
        // todo 登录日志
        $auth = new Auth();
        return $auth->logout($token);
    }
}