<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuizAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        "option1",
        "option2",
        "option3",
        "option4",
        'corect1',
        'corect2',
        'corect3',
        'corect4',
    ];
    protected $attributes = [    'corect1'=> 0,
    'corect2'=> 0,
    'corect3'=> 0,
    'corect4'=> 0
    ];

    public function question():BelongsTo{
        return $this->belongsTo(Question::class);
    }

}
