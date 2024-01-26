<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentCourses extends Model
{
    function Student():BelongsTo{
        return $this->belongsTo(Student::class);
    }

    function Course():BelongsTo{
        return $this->belongsTo(Course::class);
    }
}
