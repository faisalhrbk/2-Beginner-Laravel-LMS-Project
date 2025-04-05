<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{

    use HasFactory;
    public $guarded = [];
    public $timestamps = false;

    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
