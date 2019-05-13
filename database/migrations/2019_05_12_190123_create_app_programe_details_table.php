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
            $table->unsignedInteger('applicant_id');
            $table->unsignedInteger('program_id');
            $table->unsignedInteger('stream_id');
            $table->timestamps();

            $table->foreign('applicant_id')
                ->references('app_personal_details')
                ->on('id')
                ->delete('cascade');
            $table->foreign('program_id')->references('programs')->on('id');
            $table->foreign('stream_id')->references('streams')->on('id');
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
