<?php

namespace Framework;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
        return $this->belongsTo(State::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }

    public function reviewed()
    {
        return $this->hasMany(Review::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'tutor_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class, 'tutor_id');
    }

    public function kyc(){
        return $this->hasOne(Kyc::class,'tutor_id');
    }

    public function result(){
        return $this->hasOne(Result::class,'tutor_id');
    }

    
}

