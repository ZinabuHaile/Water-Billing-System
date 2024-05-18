<?php

namespace App\Models;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobtitle extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description'
    ];


    // public function staffs(){
    //     return $this->hasMany(Staff::class);
    // }
}
