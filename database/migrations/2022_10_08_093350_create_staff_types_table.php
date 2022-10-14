<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('staff_types', function (Blueprint $table) {
            $table->id();
            $table->string('staff_type_name');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('staff_types');
    }
};
