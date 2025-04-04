<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Course;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{

    use HasFactory, Notifiable;

    public $guarded = [];
    public $timestamps = false;
    function courses()
    {
        return $this->hasMany(Course::class);
    }
}
