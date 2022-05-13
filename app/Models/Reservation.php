<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=['name','email','date','sunrice','service_id'];
    public function services(){
        return $this->belongsTo(Service::class);
    }
}
