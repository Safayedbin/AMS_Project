<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        "Question_text",
        "Marks",
        "exam_fk"
    ];


    public function answer():HasOne{
       return  $this->hasOne(Answer::class);
    }
    public function studentanswer():HasMany{
       return  $this->hasMany(StudentAnswer::class);
    }
    public function studentquizanswer():HasMany{
        return $this->hasMany(StudentQuizAnswer::class);
    }
    public function quizanswer():HasMany{
        return $this->hasMany(QuizAnswer::class);
    }

    public function exam():BelongsTo{
        return $this->belongsTo(Exam::class);
    }
}
