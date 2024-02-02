<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'text',
        'Post_at',
        'course_fk',
    ];
    public function exam():BelongsTo{
        return $this->belongsTo(Exam::class);
    }
}
