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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('diachi')->nullable();
            $table->string('anhdaidien', 100)->nullable();   
            $table->boolean('gioitinh')->nullable();
            $table->integer('namsinh')->nullable();
            $table->string('sodienthoai', 20);
            $table->tinyInteger('quyen');
            $table->boolean('trangthai')->nullable();
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
