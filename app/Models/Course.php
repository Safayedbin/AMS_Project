<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    function teachers():BelongsTo{
        return $this->belongsTo(Teacher::class);
    }

    function StudentCourse():HasMany{
        return $this->hasMany(StudentCourses::class);
    }

    function Test():HasMany{
        return $this->hasMany(Test::class);
    }

    function Notice():HasMany{
        return $this->hasMany(Notice::class);
    }
}
