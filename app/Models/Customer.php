<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'id_customer';

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'customer_id');
        //Satu Customer memiliki banyak Reservation.
    }

    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class, 'account_holder');
        //Satu Customer memiliki banyak BankAccount.
    }
}