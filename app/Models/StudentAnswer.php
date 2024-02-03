<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentAnswer extends Model
{
    use HasFactory;

    protected $fillable= [
        "answer_text",
        "student_fk",
        "question_fk",
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function question():BelongsTo{
        return $this->belongsTo(Question::class);
    }
}

