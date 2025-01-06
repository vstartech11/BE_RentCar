<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    protected $primaryKey = 'id_police';

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_police', 'police_id', 'car_id');
        //Satu Police dapat memeriksa banyak Car (many-to-many).
    }
}