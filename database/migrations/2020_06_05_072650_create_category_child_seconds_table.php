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

            // -----------------------------------------------------------
            $table->mediumText('estate_category')->nullable();
            $table->mediumText('estate_address')->nullable();
            $table->mediumText('estate_name_project')->nullable();
            $table->mediumText('estate_land_area')->nullable();
            $table->mediumText('estate_floor')->nullable();
            $table->mediumText('estate_bedroom')->nullable();
            $table->mediumText('estate_bathroom')->nullable();
            $table->mediumText('estate_area_used')->nullable();
            $table->mediumText('estate_juridical')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('car_color')->nullable();
            $table->mediumText('car_version')->nullable();
            $table->mediumText('car_origin')->nullable();
            $table->mediumText('car_status')->nullable();
            $table->mediumText('car_produce_name')->nullable();
            $table->mediumText('car_model_name')->nullable();
            $table->mediumText('car_register_year')->nullable();
            $table->mediumText('car_category')->nullable();
            $table->mediumText('car_number_kilometer')->nullable();
            $table->mediumText('car_fuel')->nullable();
            $table->mediumText('car_image_register_paper')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('electron_manufacturer')->nullable();
            $table->mediumText('electron_model_machine')->nullable();
            $table->mediumText('electron_color')->nullable();
            $table->mediumText('electron_status')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('work_type')->nullable();
            $table->mediumText('work_old')->nullable();
            $table->mediumText('work_sex')->nullable();
            $table->mediumText('work_certificate')->nullable();
            $table->mediumText('work_foreign_language')->nullable();
            $table->mediumText('work_position')->nullable();
            $table->mediumText('work_job')->nullable();
            $table->mediumText('work_experience')->nullable();
            $table->mediumText('work_salary_level')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('food_origin')->nullable();
            $table->mediumText('food_expiration')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('refrigerator_status')->nullable();
            $table->mediumText('refrigerator_manufacturer')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('furniture_status')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('fashion_status')->nullable();
            $table->mediumText('fashion_type_product')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('sport_status')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('office_furniture_status')->nullable();
            // -----------------------------------------------------------

            // -----------------------------------------------------------
            $table->mediumText('service_type_work')->nullable();
            $table->mediumText('service_experience_work')->nullable();
            // -----------------------------------------------------------


            // -----------------------------------------------------------
            $table->mediumText('mom_baby_status')->nullable();
            $table->mediumText('mom_baby_type_product')->nullable();
            // -----------------------------------------------------------


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
