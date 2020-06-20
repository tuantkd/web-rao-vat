<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryChildSecondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_child_seconds', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_first_id');
            $table->foreign('category_first_id')->references('id')->on('category_child_firsts')->onDelete('cascade');

            $table->mediumText('estate_category')->nullable();
            $table->mediumText('estate_address')->nullable();
            $table->mediumText('estate_name_project')->nullable();
            $table->mediumText('estate_land_area')->nullable();
            $table->mediumText('estate_land_area')->nullable();
            $table->mediumText('estate_floor')->nullable();
            $table->mediumText('estate_bedroom')->nullable();
            $table->mediumText('estate_bathroom')->nullable();
            $table->integer('estate_area_used')->nullable();
            $table->mediumText('estate_juridical')->nullable();


            $table->mediumText('car_color')->nullable();
            $table->mediumText('car_version')->nullable();
            $table->mediumText('car_origin')->nullable();
            $table->mediumText('car_produce_name')->nullable();
            $table->mediumText('car_model_name')->nullable();
            $table->mediumText('car_produce_year')->nullable();
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
        Schema::dropIfExists('category_child_seconds');
    }
}
