<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionBanks extends Model
{
    function Test():BelongsTo{
        return $this->belongsTo(Test::class);
    }

    function AnswerBanks():HasMany{
        return $this->hasMany(AnswerBanks::class);
    }
}
