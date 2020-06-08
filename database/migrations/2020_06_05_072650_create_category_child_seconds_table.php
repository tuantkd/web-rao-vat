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

            $table->mediumText('type_property');
            $table->mediumText('address');
            $table->mediumText('project_name');
            $table->mediumText('land_area');
            $table->mediumText('floor');
            $table->mediumText('bedroom');
            $table->mediumText('bathroom');
            $table->integer('area_used');
            $table->mediumText('juridical');
            $table->mediumText('type_work');
            $table->integer('year_old');
            $table->string('sex');
            $table->mediumText('certificate');
            $table->mediumText('foreign_anguage');
            $table->mediumText('position');
            $table->mediumText('job');
            $table->mediumText('experience');
            $table->integer('level_salary');
            $table->mediumText('manufacture');
            $table->mediumText('color_item');
            $table->mediumText('new_percent_item');
            $table->integer('year_manufacture');
            $table->mediumText('manufacture_item');
            $table->mediumText('fuel');
            $table->mediumText('model_line_item');
            $table->date('expiration_date');
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
