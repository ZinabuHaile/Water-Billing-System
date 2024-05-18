<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'officialsite',
        'city',
        'moto'
        
    ];



          

    //  public function staffs(){
    //     return $this->hasMany(Staff::class);
    // }
}
