<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
