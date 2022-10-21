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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_profession_or_designation');
            $table->text('client_testimonial');
            $table->binary('client_image');
            $table->integer('client_rating');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('testimonials');
    }
};
