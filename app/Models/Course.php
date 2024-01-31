<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'course_code',
        'section',
    ];


    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function studentcourse():HasMany{
        return $this->hasMany(StudentCourses::class);
    }
    public function exam():HasMany{
        return $this->hasMany(Exam::class);
    }
    public function notice():HasMany{
        return $this->hasMany(Notice::class);
    }
}
