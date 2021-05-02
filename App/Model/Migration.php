<?php

declare (strict_types=1);
namespace App\Model;

use EasySwoole\Skeleton\Framework\BaseModel;
/**
 * @property int $id 
 * @property string $migration 
 * @property int $batch 
 */
class Migration extends BaseModel
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
    protected $table = 'migrations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'migration', 'batch'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'batch' => 'integer'];
}