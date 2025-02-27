<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Model
{
    use HasFactory;
    // use SoftDeletes;
    public $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'pincode',
        'course',
        'department',
        'semester',
        'roll_no',
        'registration_no',
        'admission_date',
        'dob',
    ];
}
