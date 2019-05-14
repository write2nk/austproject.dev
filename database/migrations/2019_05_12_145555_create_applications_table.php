<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_no', 20)->unique();
            $table->unsignedBigInteger('applicant_id');
            $table->boolean('submitted')->nullable();
            $table->boolean('paid')->nullable();
            $table->boolean('processed')->nullable();
            $table->date('submitted_on')->nullable();
            $table->timestamps();

            $table->foreign('applicant_id')
                ->references('id')
                ->on('users')
                ->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
