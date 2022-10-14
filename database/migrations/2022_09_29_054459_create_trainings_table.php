<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @updatedBy      :  Newton Mitro
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Applicant training migration table
 *========================================================================**/

return new class extends Migration
{
    public function up()
    {
        Schema::create('Trainings', function (Blueprint $table) {
            $table->id();
            $table->string('training_title');
            $table->text('topic');
            $table->string('institute_name');
            $table->date('from_date');
            $table->date('to_date');
            $table->unsignedBigInteger('applicant_id');
            $table->timestamps();
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trainings');
    }
};
