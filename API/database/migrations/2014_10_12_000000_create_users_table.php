<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 128);
            $table->string('email', 128)->unique();
            $table->string('password', 128);
            $table->foreign('role_id')->references('id')->on('user_roles');
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
