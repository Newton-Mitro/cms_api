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
 * @description    :  Job circulars migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('job_circulars', function (Blueprint $table) {
            $table->id();
            $table->string('job_position');
            $table->string('vacancy');
            $table->text('job_responsibility');
            $table->string('employment_status');
            $table->text('educational_requirement');
            $table->text('experience_requirements');
            $table->text('additional_requirements');
            $table->string('salary');
            $table->text('compensation_and_benefits');
            $table->date('application_deadline');
            $table->date('published_on');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('job_circulars');
    }
};
