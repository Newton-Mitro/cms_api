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
 * @description    :  Menu migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_name');
            $table->string('link_to')->nullable();
            $table->string('icon')->nullable();
            $table->integer('parent_id')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('menus');
    }
};
