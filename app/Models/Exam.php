<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'title',
        'type',
        'Due_date',
        'unlocks',
        'Duration',
        'Total_Marks',
        'course_fk',
    ];


    public function course():BelongsTo{
        return $this->belongsTo(Course::class);
    }
    public function status():HasOne{
        return $this->hasOne(Status::class);
    }

    public function question():HasMany{
        return $this->hasMany(Question::class);
    }
}
