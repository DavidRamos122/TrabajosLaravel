<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_teachers extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->belongsTo('app/Models/Teachers');
        
    }

    public function courses()
    {
        return $this->belongsTo('app/Models/Courses');
    }
}
