<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperations extends Model
{
    use HasFactory;
    public function organizers(){
        return $this->belongsTo(Organizers::class, 'organizers_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
