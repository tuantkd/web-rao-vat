<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{

    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('id')->on('post_news')->onDelete('cascade');

            $table->mediumText('title');
            $table->mediumText('image')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
