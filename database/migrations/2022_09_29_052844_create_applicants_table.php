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

return new class extends Migration
{

    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_photo');
            $table->string('applicant_name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('gender');
            $table->string('blood_group');
            $table->string('date_of_birth');
            $table->string('national_id')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->string('religion');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->string('email_personal');
            $table->string('email_office')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            $table->string('emergency_contact_number')->nullable();
            $table->string('contact_number_work')->nullable();
            $table->string('contact_number_home')->nullable();
            $table->string('contact_number_cell')->nullable();
            $table->string('present_address_1');
            $table->string('present_address_2')->nullable();
            $table->string('present_address_3')->nullable();
            $table->string('present_address_4')->nullable();
            $table->string('permanent_address_1');
            $table->string('permanent_address_2')->nullable();
            $table->string('permanent_address_3')->nullable();
            $table->string('permanent_address_4')->nullable();
            $table->unsignedBigInteger('job_circular_id');
            $table->timestamps();
            $table->foreign('job_circular_id')->references('id')->on('job_circulars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicants');
    }
};
