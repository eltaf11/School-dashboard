<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'class',
        'joining_date',
        'mobile_number',
        'admission_number',
        'father_name',
        'father_occupation',
        'father_mobile_number',
        'mother_name',
        'mother_occupation',
        'mother_mobile_number',
        'address'
    ];


}
