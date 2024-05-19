<?php

namespace App\Models;


use App\Models\Metercategory;
use App\Models\Serviceyear;
use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fixedrate extends Model
{
    use HasFactory;
    protected $fillable = [
        'metercategory_id',
        'serviceyear_id',  
        'chargeamount',
        'description',
         
    ];

    public function metcategory(){
        return $this->belongsTo(Metercategory::class);
    }
    public function serviceyr(){
        return $this->belongsTo(Serviceyear::class);
    }    
}


