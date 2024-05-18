<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'meter_id',
        'previousreading',
        'currentreading',
        'readmonth', 
        'readyear',  
        'readdate'
    ];
}




        