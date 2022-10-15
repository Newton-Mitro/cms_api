<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**==============================================
 * ?                    ABOUT
 * @author      : 
 * @email       : 
 * @repo        : 
 * @createdOn   : 
 * @updatedBy   :  Newton Mitro
 * @UpdatedAt   :  15-10-2022
 * @description : 
 *=============================================**/

class CreateSocialMediaTypesTable extends Migration {

    public function up() {
        Schema::create('social_media_types', function (Blueprint $table) {
            $table->id();
            $table->string('social_media_type_name');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('social_media_types');
    }
}
