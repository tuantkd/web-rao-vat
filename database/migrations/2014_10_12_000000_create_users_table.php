<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('level_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('verifyToken')->nullable();
            $table->integer('verify')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->string('sex')->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('access_token')->nullable();
            $table->float('number_money')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
