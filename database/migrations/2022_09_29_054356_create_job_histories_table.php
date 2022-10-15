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
 * @description    :  Applicant Job history migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('job_histories', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('designation');
            $table->text('responsibilities');
            $table->text('reason_for_leaving');
            $table->string('salary');
            $table->unsignedBigInteger('applicant_id');
            $table->timestamps();
            $table->foreign('applicant_id')->references('id')->on('applicants')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('job_histories');
    }
};
