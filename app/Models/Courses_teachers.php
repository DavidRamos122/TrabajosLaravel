<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_teachers extends Model
{
    use HasFactory;

    public function teachers()
    {
        return $this->belongsTo(Teachers::class);
        
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
}
