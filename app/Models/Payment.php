<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
       'paymentmethod_id',
       'bill_id',
       'user_id',
       'bill_id',
       'paidamount',
       'paydate'    
    ];
}



     