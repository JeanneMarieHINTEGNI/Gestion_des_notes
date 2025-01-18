<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;


    protected $table = 'ues'; 

    
    protected $fillable = ['code', 'nom', 'credits_ects', 'semestre'];
}





