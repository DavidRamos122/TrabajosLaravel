<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;


    public function aprendices()
    {
        return $this->hasMany('app/Models/Aprendices');
    }

    public function courses_teachers()
    {
        return $this->hasMany('app/Models/Courses_teachers');
    }

    public function areas()
    {
        return $this->belongsTo('app/Models/Areas');
    }

    public function training_centers()
    {
        return $this->belongsTo('app/Models/Training_centers');
    }
}

