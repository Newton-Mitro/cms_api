<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**========================================================================
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  03-10-2022
 * @description    :  Applicants eduction migration table
 *========================================================================**/

return new class extends Migration
{
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_degree');
            $table->string('institute_name');
            $table->string('major');
            $table->string('board');
            $table->string('result');
            $table->year('passing_year');
            $table->unsignedBigInteger('applicant_id');
            $table->timestamps();
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('educations');
    }
};
