<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;
    
    public function aprendices()
    
    {
        return $this->hasMany(Aprendices::class);
    }
}
