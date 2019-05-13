<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_personal_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('last_name', 200);
            $table->string('first_name', 200);
            $table->string('middle_name', 200)->nullable();
            $table->unsignedInteger('gender_id');
            $table->unsignedInteger('marital_status_id');
            $table->dateTimeTz('date_of_birth');
            $table->string('nationality_id', 5);
            $table->string('state_of_origin_id', 5);
            $table->unsignedInteger('disabled_id');
            $table->string('disability')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('users')->on('id')
                ->delete('cascade');
            $table->foreign('gender_id')->references('genders')->on('id');
            $table->foreign('marital_status_id')->references('marital_statuses')->on('id');
            $table->foreign('nationality_id')->references('countries')->on('id');
            $table->foreign('state_of_origin_id')->references('states')->on('id');
            $table->foreign('disabled_id')->references('disabilities')->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_personal_details');
    }
}
