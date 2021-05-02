<?php

declare (strict_types=1);
namespace App\Model;

use EasySwoole\Skeleton\Framework\BaseModel;
/**
 * @property string $id 
 * @property string $ptype 
 * @property string $v0 
 * @property string $v1 
 * @property string $v2 
 * @property string $v3 
 * @property string $v4 
 * @property string $v5 
 * @property int $create_at 
 * @property int $update_at 
 */
class AuthRule extends BaseModel
{
    /**
     * primaryKey
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'auth_rules';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'ptype', 'v0', 'v1', 'v2', 'v3', 'v4', 'v5', 'create_at', 'update_at'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'string', 'create_at' => 'datetime', 'update_at' => 'datetime'];
}