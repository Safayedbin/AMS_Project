<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnswerBanks extends Model
{
    function QuestionBanks():BelongsTo{
        return $this->belongsTo(QuestionBanks::class);
    }
}
