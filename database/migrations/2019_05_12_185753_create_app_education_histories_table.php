<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppEducationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_education_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('applicant_id');
            $table->string('institution', 200);
            $table->unsignedInteger('degree_id');
            $table->string('course', 200);
            $table->unsignedInteger('start_month_id');
            $table->year('start_year');
            $table->unsignedInteger('graduation_month_id');
            $table->year('graduation_year');
            $table->timestamps();

            $table->foreign('applicant_id')
                ->references('app_personal_details')
                ->on('id')
                ->delete('cascade');
            $table->foreign('degree_id')->references('degree')->on('id');
            $table->foreign('start_month_id')->references('months')->on('id');
            $table->foreign('graduation_month_id')->references('months')->on('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_education_histories');
    }
}
