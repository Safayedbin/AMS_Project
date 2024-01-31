<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillables= [
        'name',
        'password',
        'organization_id',
        'acc_type',
        'title',
    ];

    public function image ():BelongsTo{
        return $this->belongsTo(Image::class);
    }


    public function course():HasMany{
        return $this->hasMany(Course::class);
    }


    public function studentcourse():HasMany{
        return $this->hasMany(StudentCourses::class);
    }

    public function studentanswer():HasMany{
        return $this->hasMany(StudentAnswer::class);
    }
    public function studentquizanswer():HasMany{
        return $this->hasMany(StudentQuizAnswer::class);
    }

}
