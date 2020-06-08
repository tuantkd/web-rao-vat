<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_news', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_type_id');
            $table->foreign('post_type_id')->references('id')->on('post_types')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');

            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

            $table->mediumText('title');
            $table->float('price');
            $table->mediumText('currency');
            $table->mediumText('content');
            $table->mediumText('tag_search');
            $table->mediumText('image');
            $table->float('duration');
            $table->float('hide_new');
            $table->mediumText('category_new');
            $table->string('status');
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
        Schema::dropIfExists('post_news');
    }
}
