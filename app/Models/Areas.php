<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Courses::class);
        
    }
    
    public function teachers()
    {
        return $this->hasMany(Teachers::class);
        
    }
}
