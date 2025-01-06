<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $primaryKey = 'id_bank';

    public function accounts()
    {
        return $this->hasMany(BankAccount::class, 'id_bank');
        //Satu Bank memiliki banyak BankAccount.
    }
}