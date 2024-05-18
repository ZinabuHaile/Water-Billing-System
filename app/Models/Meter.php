<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Metercategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meter extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'metercategory_id',
        'serialnumber',
        'kebelle',
        'ketena',
        'installeddate'        
    ];

    public function metercategory(){
        return $this->belongsTo(Metercategory::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }   

}


