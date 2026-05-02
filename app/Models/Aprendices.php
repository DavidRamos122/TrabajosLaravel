<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendices extends Model
{
    use HasFactory;

    public function computers()
    {
        return $this->belongsTo(Computers::class);
        
    }

        public function courses()
    {
        return $this->belongsTo('app/Models/Courses');
    }
}
