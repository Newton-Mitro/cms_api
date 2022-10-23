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
        Schema::create('service_centers', function (Blueprint $table) {
            $table->id();
            $table->string('service_center_name');
            $table->string('address');
            $table->string('phone_number')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('work_days')->nullable();
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->string('acting_in_charge')->nullable();
            $table->string('in_charge_designation')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedBigInteger('service_center_type_id')->nullable();
            $table->timestamps();
            $table->foreign('service_center_type_id')->references('id')->on('service_center_types')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('service_centers');
    }
};
