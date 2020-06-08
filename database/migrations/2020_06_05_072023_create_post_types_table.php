<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTypesTable extends Migration
{

    public function up()
    {
        Schema::create('post_types', function (Blueprint $table) {
            $table->id();
            $table->string('post_type_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_types');
    }
}
