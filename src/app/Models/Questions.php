<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'text',
        'supplement',
        'quiz_id',
    ];

    public function quizzes()
    {
        return $this->belongsTo(Quizzes::class);
    }

    public function choices()
    {
        return $this->hasMany(Choices::class,'question_id', 'id');
    }
}
