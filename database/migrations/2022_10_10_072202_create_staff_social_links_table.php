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
        Schema::create('staff_social_links', function (Blueprint $table) {
            $table->id();
            $table->string('social_link');
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('social_media_type_id');
            $table->timestamps();
            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade');
            $table->foreign('social_media_type_id')->references('id')->on('social_media_types');
        });
    }

    public function down() {
        Schema::dropIfExists('staff_social_links');
    }
};
