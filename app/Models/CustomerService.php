<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    protected $primaryKey = 'id';

    public function cars()
    {
        return $this->hasMany(Car::class, 'id_car');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'id_customer');
    }

    public function rentals()
    {
        return $this->hasMany(Reservation::class, 'reservation_id');
    }
    //CustomerService mengelola banyak Car, Customer, dan Reservation.
}