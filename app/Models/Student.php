<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    function StudentCourse():HasMany{
        return $this->hasMany(StudentCourses::class);
    }
    function StudentTracks():HasMany{
        return $this->hasMany(StudentTracks::class);
    }
}
