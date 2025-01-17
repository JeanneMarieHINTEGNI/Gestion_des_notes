<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUesTable extends Migration
{
    public function up()
    {
        Schema::create('ues', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('nom');
            $table->integer('ects');
            $table->integer('semestre');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('ues');
    }
}

