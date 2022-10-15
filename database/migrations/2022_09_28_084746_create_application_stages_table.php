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
 * @description    :  Application stage migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('application_stages', function (Blueprint $table) {
            $table->id();
            $table->string('stage_name');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('application_stages');
    }
};
