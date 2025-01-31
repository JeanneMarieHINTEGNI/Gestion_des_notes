<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'credits', 'semester'];

    public function ecs()
    {
        return $this->hasMany(EC::class);
    }
}





