<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EC extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'coefficient',
        'ue_id',
        'teacher_id',
    ];

    public function ue()
    {
        return $this->belongsTo(UE::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}


