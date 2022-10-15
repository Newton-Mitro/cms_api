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

return new class extends Migration {
    
    public function up() {
        Schema::create('service_centers', function (Blueprint $table) {
            $table->id();
            $table->string('service_center_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('fax');
            $table->string('email');
            $table->string('work_days');
            $table->string('opening_time');
            $table->string('closing_time');
            $table->string('acting_in_charge');
            $table->string('in_charge_designation');
            $table->string('latitude');
            $table->string('longitude');
            $table->unsignedBigInteger('service_center_type_id');
            $table->timestamps();
            $table->foreign('service_center_type_id')->references('id')->on('service_center_types')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('service_centers');
    }
};
