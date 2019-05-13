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
            $table->unsignedBigInteger('user_id');
            $table->string('last_name', 200);
            $table->string('first_name', 200);
            $table->string('middle_name', 200)->nullable();
            $table->unsignedInteger('gender_id');
            $table->unsignedInteger('marital_status_id');
            $table->date('date_of_birth');
            $table->string('nationality_id', 5);
            $table->unsignedInteger('state_of_origin_id');
            $table->unsignedInteger('disabled_id');
            $table->string('disability')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->delete('cascade');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses');
            $table->foreign('nationality_id')->references('id')->on('countries');
            $table->foreign('state_of_origin_id')->references('id')->on('states');
            $table->foreign('disabled_id')->references('id')->on('disabilities');
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
