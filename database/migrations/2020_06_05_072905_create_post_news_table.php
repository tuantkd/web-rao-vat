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

            $table->unsignedBigInteger('post_type_id')->nullable();
            $table->foreign('post_type_id')->references('id')->on('post_types')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('category_first_id')->nullable();
            $table->foreign('category_first_id')->references('id')->on('category_child_firsts')->onDelete('cascade');

            $table->unsignedBigInteger('province_id')->nullable();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');

            $table->mediumText('title')->nullable();
            $table->integer('price')->nullable();
            $table->mediumText('unit_price')->nullable();
            $table->mediumText('currency')->nullable();
            $table->mediumText('content')->nullable();
            $table->mediumText('tag_search')->nullable();
            $table->mediumText('images')->nullable();
            $table->integer('number_date_expired')->nullable();
            $table->integer('hidden_new')->nullable();
            $table->integer('status')->nullable();
            $table->integer('save_post')->nullable();
            $table->integer('user_saved_id')->nullable();
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
