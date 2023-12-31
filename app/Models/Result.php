<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    public function quizzes()
    {
        return $this->belongsTo(Quiz::class);
    }
}
