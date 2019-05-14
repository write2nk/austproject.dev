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
            $table->unsignedBigInteger('application_id');
            $table->string('institution', 200);
            $table->unsignedInteger('degree_id');
            $table->string('course', 200);
            $table->unsignedInteger('start_month_id');
            $table->year('start_year');
            $table->unsignedInteger('graduation_month_id');
            $table->year('graduation_year');
            $table->timestamps();

            $table->foreign('application_id')
                ->references('id')
                ->on('applications')
                ->delete('cascade');
            $table->foreign('degree_id')->references('id')->on('degrees');
            $table->foreign('start_month_id')->references('id')->on('months');
            $table->foreign('graduation_month_id')->references('id')->on('months');

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
