<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'reservation_id';

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
        //Satu Reservation dimiliki oleh satu Customer.
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
        //Satu Reservation dimiliki oleh satu Car.
    }
}