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

            $table->unsignedBigInteger('category_first_id');
            $table->foreign('category_first_id')->references('id')->on('category_child_firsts')->onDelete('cascade');

            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');

            $table->mediumText('title');
            $table->integer('price');
            $table->mediumText('unit_price');
            $table->mediumText('currency');
            $table->mediumText('content');
            $table->mediumText('tag_search');
            $table->mediumText('images');
            $table->integer('number_date_expired');
            $table->integer('hidden_new');
            $table->integer('status');
            $table->integer('save_post');
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
