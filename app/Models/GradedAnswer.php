<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradedAnswer extends Model
{
    use HasFactory;
    protected $fillable= [
        "answer_text",
        "student_fk",
        "answer_fk",
    ];
}
