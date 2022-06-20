<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperations extends Model
{
    use HasFactory;
    protected $guarded = [];  
    public function organizers(){
        return $this->belongsTo(Organizers::class, 'organizers_id', 'id');
    }

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function services(){
        return $this->belongsToMany(Service_categories::class, 'service_details', 'cooperations_id', 'service_categories_id');
    }
}
