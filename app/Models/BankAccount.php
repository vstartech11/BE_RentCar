<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $primaryKey = 'account_number';
    public $incrementing = false; // Karena primary key bukan integer

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'account_holder');
        //Satu BankAccount dimiliki oleh satu Customer.
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'id_bank');
        //Satu BankAccount dimiliki oleh satu Bank.
    }
}