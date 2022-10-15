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
 * @updatedBy      :  Newton Mitro
 * @UpdatedAt      :  15-10-2022
 * @description    :  Applicant training migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->binary('staff_image');
            $table->string('staff_designation');
            $table->text('about_the_staff');
            $table->unsignedBigInteger('staff_type_id');
            $table->timestamps();
            $table->foreign('staff_type_id')->references('id')->on('staff_types');
        });
    }

    public function down() {
        Schema::dropIfExists('staffs');
    }
};
