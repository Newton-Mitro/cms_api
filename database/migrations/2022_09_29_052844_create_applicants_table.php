<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Applicants migration table
 *------------------------------------------------------------------------**/

return new class extends Migration {

    public function up() {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_photo');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_phone_number');
            $table->string('applicant_emergency_contact')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('present_address_1');
            $table->string('present_address_2')->nullable();
            $table->string('present_address_3')->nullable();
            $table->string('present_address_4')->nullable();
            $table->string('permanent_address_1');
            $table->string('permanent_address_2')->nullable();
            $table->string('permanent_address_3')->nullable();
            $table->string('permanent_address_4')->nullable();
            $table->string('blood_group');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('attached_resume')->nullable();
            $table->text('cover_letter')->nullable();
            $table->decimal('expected_salary')->nullable();
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
