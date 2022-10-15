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
 * @description    :  Post  migration table
 *========================================================================**/

return new class extends Migration {
    
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_slug')->unique();
            $table->binary('post_image');
            $table->string('post_title');
            $table->string('post_icon')->nullable();
            $table->text('post_content');
            $table->unsignedBigInteger('post_type_id');
            $table->timestamps();
            $table->foreign('post_type_id')->references('id')->on('post_types')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('posts');
    }
};
