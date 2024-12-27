<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ec extends Model
{
    public function up()
{
    Schema::create('ecs', function (Blueprint $table) {
        $table->id();
        $table->string('nom'); // Nom de l'EC
        $table->unsignedBigInteger('ue_id'); // Clé étrangère vers l'UE
        $table->timestamps();

        $table->foreign('ue_id')->references('id')->on('ues')->onDelete('cascade');
    });
}

}
