<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Track extends Model
{
    function StudentTracks():HasMany{
        return $this->hasMany(StudentTracks::class);
    }
    function Test():BelongsTo{
        return $this->belongsTo(Test::class);
    }
}
