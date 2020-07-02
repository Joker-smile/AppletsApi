<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeixinSessionKeyToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('weapp_openid')->nullable()->unique()->after('weixin_openid');
            $table->string('weixin_session_key')->nullable()->after('weapp_openid');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('weapp_openid');
            $table->dropColumn('weixin_session_key');
        });
    }
}
