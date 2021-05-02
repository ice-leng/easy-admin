<?php

declare (strict_types=1);
namespace App\Model;

use EasySwoole\Skeleton\Framework\BaseModel;
/**
 * @property string $platform_id 
 * @property int $create_at 
 * @property int $update_at 
 * @property int $enable 
 * @property string $platform_name 姓名
 * @property string $account 账号
 * @property string $password 密码
 * @property int $last_time 上一次登录时间
 * @property int $active 启用状态，1启用，2未启用
 * @property string $auth_role_id 角色id
 */
class Platform extends BaseModel
{
    /**
     * primaryKey
     *
     * @var string
     */
    protected $primaryKey = 'platform_id';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'platform';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['platform_id', 'create_at', 'update_at', 'enable', 'platform_name', 'account', 'password', 'last_time', 'active', 'auth_role_id'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['platform_id' => 'string', 'create_at' => 'datetime', 'update_at' => 'datetime', 'enable' => 'integer', 'last_time' => 'integer', 'active' => 'integer', 'auth_role_id' => 'string'];
}