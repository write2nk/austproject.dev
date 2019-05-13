<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppProgrameDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_programe_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('applicant_id');
            $table->unsignedInteger('program_id');
            $table->unsignedInteger('stream_id');
            $table->timestamps();

            $table->foreign('applicant_id')
                ->references('id')
                ->on('app_personal_details')
                ->delete('cascade');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('stream_id')->references('id')->on('streams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_programe_details');
    }
}
