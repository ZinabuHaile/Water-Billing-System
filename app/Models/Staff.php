<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Jobtitle;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory,HasRoles;
    protected $fillable = [
         'name',
        //  'lastname',
         'phone',
         'email',
         'jobtitle_id',
         'company_id'
    ];

    public function jobtitle(){
        return $this->belongsTo(Jobtitle::class);
    }
   
    public function company(){
        return $this->belongsTo(Company::class);
    }
}

