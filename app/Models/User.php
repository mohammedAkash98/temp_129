<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function result()
    {
        return $this->hasMany(Result::class);
    }
    public function overview()
    {
        return $this->hasOne(Overview::class);
    }

    public function webinars()
    {
        return $this->hasMany(Webinar::class);
    }

    public function homeContents()
    {
        return $this->hasMany(HomeContent::class);
    }

    public function svccs()
    {
        return $this->hasMany(Svcc::class);
    }
    public function activity_sheets()
    {
        return $this->hasMany(ActivitySheet::class);
    }

    public function others()
    {
        return $this->hasMany(Other::class);
    }
}
