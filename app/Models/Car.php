<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $primaryKey = 'id_car';

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'car_id');
        //Satu Car memiliki banyak Reservation.
    }

    public function insurances()
    {
        return $this->belongsToMany(Insurance::class, 'car_insurance', 'car_id', 'insurance_id');
        //Satu Car dapat memiliki banyak Insurance (many-to-many).
    }

    public function polices()
    {
        return $this->belongsToMany(Police::class, 'car_police', 'car_id', 'police_id');
        //Satu Car dapat diperiksa oleh banyak Police (many-to-many).
    }
}