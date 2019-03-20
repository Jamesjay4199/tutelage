<?php

namespace Framework\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Framework\Traits\Reviewable;

class User extends Authenticatable
{
    use Notifiable, Reviewable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function state() 
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class, 'state_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'tutor_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course');
    }

    public function kyc()
    {
        return $this->hasOne(Kyc::class, 'user_id');
    }

    public function price()
    {
        return $this->hasOne(Price::class, 'tutor_id');
    }
}
