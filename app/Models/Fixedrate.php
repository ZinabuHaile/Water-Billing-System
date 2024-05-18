<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixedrate extends Model
{
    use HasFactory;
    protected $fillable = [
        'metercategory_id',
        'chargeamount',
        'description',
        'effectiveyear',      
    ];
}


