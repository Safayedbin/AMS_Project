<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentQuizAnswer extends Model
{
    use HasFactory;
    protected $fillable=[
        'tick1',
        'tick2',
        'tick3',
        'tick4'
    ];
    public function question():BelongsTo{
        return $this->belongsTo(Question::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
