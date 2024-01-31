<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['Status'];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function exam():BelongsTo{
        return $this->belongsTo(exam::class);
    }
}
