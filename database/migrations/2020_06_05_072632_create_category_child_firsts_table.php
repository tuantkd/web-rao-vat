<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryChildFirstsTable extends Migration
{
    public function up()
    {
        Schema::create('category_child_firsts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');

            $table->string('category_child_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_child_firsts');
    }
}
