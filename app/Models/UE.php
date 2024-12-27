<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ue extends Model
{
    
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'ues';

    protected $fillable = ['code', 'nom', 'ects', 'semestre'];

}

