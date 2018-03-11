<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            //$table->integer('id')->unsigned()->unique();
            //$table->primary('id');
            $table->increments('id');
            $table->string('title',128);
            $table->string('subdomain',32)->unique();
            $table->string('phone',14);
            $table->string('type');
            $table->string('email', 128)->unique();
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
        Schema::dropIfExists('vendors');
    }
}
