<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('employment_status');
            $table->string('notice_period');
            $table->decimal('expected_salary')->nullable();
            $table->unsignedBigInteger('application_stage_id')->default(1);
            $table->foreign('application_stage_id')->references('id')->on('application_stages');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
};
