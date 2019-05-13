<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppRefereeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_referee_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('applicant_id');
            $table->unsignedInteger('referee_title_id');
            $table->string('referee_name', 100);
            $table->string('referee_email', 200);
            $table->string('referee_phone', 20);
            $table->string('referee_affiliation', 200);
            $table->timestamps();

            $table->foreign('applicant_id')
                ->references('id')
                ->on('app_personal_details')
                ->delete('cascade');
            $table->foreign('referee_title_id')->references('id')->on('titles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_referee_details');
    }
}
