<?php

use App\Model\Platform;
use EasySwoole\HyperfOrm\Db;
use EasySwoole\Utility\SnowFlake;
use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $time = time();
        $platform = new Platform();
        $platform->insert([
            'platform_id '  => SnowFlake::make(1, 1),
            'account'       => 'root',
            'password'      => '$2y$12$3Ulm.8owrYUHoW8gFh2DIeHWucFivOJMarlBp28iXFtTO.a.2EDwO',
            'platform_name' => '超级管理员',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Db::table(Platform::getTableName())->truncate();
    }
}
