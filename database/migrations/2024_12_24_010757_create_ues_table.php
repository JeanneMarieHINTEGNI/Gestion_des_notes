<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ues', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Code unique de l'UE (par exemple, UE11)
            $table->integer('credits'); // Crédits ECTS
            $table->enum('semestre', ['S1', 'S2', 'S3', 'S4', 'S5', 'S6']); // Semestre de la Licence
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ues');
    }


};
