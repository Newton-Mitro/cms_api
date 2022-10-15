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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_title');
            $table->dateTime('event_date');
            $table->text('event_details');
            $table->binary('event_image');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('events');
    }
};
