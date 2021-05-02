<?php

declare (strict_types=1);
namespace App\Model;

use EasySwoole\Skeleton\Framework\BaseModel;
/**
 * @property string $auth_role_id 
 * @property int $create_at 
 * @property int $update_at 
 * @property int $enable 
 * @property string $role_name 角色名称
 * @property int $active 启用状态，1启用，2未启用
 */
class AuthRole extends BaseModel
{
    /**
     * primaryKey
     *
     * @var string
     */
    protected $primaryKey = 'role_id';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'auth_role';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['auth_role_id', 'create_at', 'update_at', 'enable', 'role_name', 'active'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['auth_role_id' => 'string', 'create_at' => 'datetime', 'update_at' => 'datetime', 'enable' => 'integer', 'active' => 'integer'];
}