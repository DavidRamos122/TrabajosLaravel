<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;


    public function aprendices()
    {
        return $this->hasMany(Aprendices::class);
    }

    public function courses_teachers()
    {
        return $this->hasMany(Courses_teachers::class);
    }

    public function areas()
    {
        return $this->belongsTo(Areas::class);
    }

    public function training_centers()
    {
        return $this->belongsTo(Training_centers::class);
    }
}

