<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    public function study_programs(){
        return $this->belongsTo(Study_programs::class);
    }
    
    public function divisions(){
        return $this->belongsTo(Divisions::class);
    }

    public function positions(){
        return $this->belongsTo(Positions::class);
    }
}
