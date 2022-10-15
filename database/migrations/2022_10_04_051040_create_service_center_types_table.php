<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**------------------------------------------------------------------------
 * ?                                ABOUT
 * @author         :  Israfil
 * @email          :  israfil@cccul.com
 * @repo           :  
 * @createdOn      :  04-10-2022
 * @description    :  Migration table in database service center types  
 *------------------------------------------------------------------------**/

return new class extends Migration {
    
    public function up() {
        Schema::create('service_center_types', function (Blueprint $table) {
            $table->id();
            $table->string('service_center_type');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('service_center_types');
    }
};
