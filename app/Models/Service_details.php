<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_details extends Model
{
    use HasFactory;
    public function service_categories(){
        return $this->belongsTo(Service_categories::class);
    }
}
