<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthFieldsToUserWebsTable extends Migration
{
    public function up()
    {
        Schema::table('user_webs', function (Blueprint $table) {
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::table('user_webs', function (Blueprint $table) {
            $table->dropColumn('remember_token');
        });
    }
}
