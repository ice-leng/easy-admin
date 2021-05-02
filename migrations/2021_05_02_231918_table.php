<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class Table extends Migration
{
    protected function common(Blueprint $table, $pk)
    {
        $table->bigIncrements($pk);
        $table->integer('create_at');
        $table->integer('update_at');
        $table->tinyInteger('enable')->default(1);
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('platform', function (Blueprint $table) {
            $this->common($table, 'platform_id');
            $table->string('platform_name', 32)->comment('姓名');
            $table->string('account', 32)->comment('账号');
            $table->char('password', 64)->comment('密码');
            $table->integer('last_time')->nullable()->comment('上一次登录时间');
            $table->tinyInteger('active')->default(1)->comment('启用状态，1启用，2未启用');
            $table->bigInteger('auth_role_id')->default(0)->comment('角色id');
        });

        Schema::create('auth_role', function (Blueprint $table) {
            $this->common($table, 'auth_role_id');
            $table->string('role_name', 32)->comment('角色名称');
            $table->tinyInteger('active')->default(1)->comment('启用状态，1启用，2未启用');
        });

        Schema::create('auth_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ptype', 255)->nullable();
            $table->string('v0', 255)->nullable();
            $table->string('v1', 255)->nullable();
            $table->string('v2', 255)->nullable();
            $table->string('v3', 255)->nullable();
            $table->string('v4', 255)->nullable();
            $table->string('v5', 255)->nullable();
            $table->integer('create_at')->nullable();
            $table->integer('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platform');
        Schema::dropIfExists('auth_role');
        Schema::dropIfExists('auth_rules');
    }
}
