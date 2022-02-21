<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'date_of_birth',
        'class',
        'joining_date',
        'mobile_number',
        'admission_number',
        'father_name',
        'farther_occupation',
        'father_mobile_number',
        'mother_name',
        'mother_occupation',
        'mother_mobile_number',
        'address'
    ];
}
