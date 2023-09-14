<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quizzes extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}