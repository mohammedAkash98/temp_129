<?php

namespace App\Models;

use App\Models\Overview;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function overview()
    {
        return $this->hasOne(Overview::class);
    }
}
