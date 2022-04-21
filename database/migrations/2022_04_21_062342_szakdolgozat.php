<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        
        Schema::create('szakdolgozats', function (Blueprint $table) {
        $table->increments('id');    
        $table->string('szakdolgozat_neve');
        $table->string('githublink');
        $table->string('oldallink');
        $table->string('tagokneve');
        $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('szekenies');
    }
};
