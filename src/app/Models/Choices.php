<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Choices extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_id',
        'text',
        'is_correct',
    ];

    public function questions()
    {
        return $this->belongsTo(Questions::class);
    }
}