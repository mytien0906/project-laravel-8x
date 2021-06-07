<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permissions', function (Blueprint $table) {
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('user_id')->on('users');
//
//            $table->unsignedBigInteger('permission_id');
//            $table->foreign('permission_id')->references('permission_id')->on('permissions');
            $table->integer('user_id');
            $table->integer('permission_id');
            $table->integer('status');

            $table->timestamps();
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permissions');
    }
}
