<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Studenttracks extends Model
{
    function Student():BelongsTo{
        return $this->belongsTo(Student::class);
    }

    function Track():BelongsTo{
        return $this->belongsTo(Track::class);
    }
}
