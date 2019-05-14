<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_contact_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('application_id');
            $table->string('email', 200);
            $table->string('phone', 20);
            $table->string('address', 500);
            $table->string('country_of_residence_id', 5);
            $table->unsignedInteger('state_of_residence_id');
            $table->string('city', 50);
            $table->string('zip_code', 10)->nullable();
            $table->timestamps();

            $table->foreign('application_id')
                ->references('id')
                ->on('applications')
                ->delete('cascade');
            $table->foreign('country_of_residence_id')->references('id')->on('countries');
            $table->foreign('state_of_residence_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_contact_details');
    }
}
