<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    public function result()
    {
        return $this->hasMany(Result::class);
    }
    public function overview()
    {
        return $this->hasOne(Overview::class);
    }
}
