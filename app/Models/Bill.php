<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'reading_id',
        'user_id',
        'totaldue',
        'billstatus',
        'token'
    ];
}


