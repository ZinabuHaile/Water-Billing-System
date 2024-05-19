<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    protected $fillable = [
        'metercategory_id',
        'serviceyear_id',
        'minrange',
        'maxrange',
        'payrate',
               
    ];

    public function serviceyr(){
        return $this->belongsTo(Serviceyear::class);
    } 
}

