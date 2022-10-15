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
 * @description    :  Post type migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('post_types', function (Blueprint $table) {
            $table->id();
            $table->string('post_type_name');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('post_types');
    }
};
