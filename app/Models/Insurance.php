<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $primaryKey = 'id_insurance';

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_insurance', 'insurance_id', 'car_id');
        //Satu Insurance dapat dimiliki oleh banyak Car (many-to-many).
    }
}