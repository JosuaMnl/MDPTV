<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    use HasFactory;
    public function organizers(){
        return $this->belongsTo(Organizers::class);
    }

    public function periods(){
        return $this->belongsTo(Periods::class);
    }
}
