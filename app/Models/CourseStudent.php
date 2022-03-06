<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class CourseStudent extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [

        'students_user_name',
        'courses_code'
    ];
}
