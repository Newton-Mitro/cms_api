<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @updatedBy      :  Newton Mitro
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Applicants migration table
 *------------------------------------------------------------------------**/

return new class extends Migration {
    
    public function up() {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->binary('applicant_photo');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_phone_number');
            $table->string('applicant_emergency_contact');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('spouse_name');
            $table->string('present_address_1');
            $table->string('present_address_2');
            $table->string('present_address_3');
            $table->string('present_address_4');
            $table->string('permanent_address_1');
            $table->string('permanent_address_2');
            $table->string('permanent_address_3');
            $table->string('permanent_address_4');
            $table->string('blood_group');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('nationality');
            $table->string('marital_status');
            $table->binary('attached_resume');
            $table->text('cover_letter');
            $table->decimal('expected_salary');
            $table->unsignedBigInteger('job_circular_id');
            $table->unsignedBigInteger('application_stage_id')->default(1);
            $table->timestamps();
            $table->foreign('job_circular_id')->references('id')->on('job_circulars')->onDelete('cascade');
            $table->foreign('application_stage_id')->references('id')->on('application_stages');
        });
    }

    public function down() {
        Schema::dropIfExists('applicants');
    }
};
