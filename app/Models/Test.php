<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{

    function QuestionBanks():HasMany{
        return $this->hasMany(QuestionBanks::class);
    }
    function Track():HasMany{
        return $this->hasMany(Track::class);
    }
}
