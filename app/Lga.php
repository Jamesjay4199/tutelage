<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    public function state(){
        return $this->belongsTo(\Framework\State::class);
    }
    public function users(){
        return $this->hasMany(\Framework\User::class);
    }
}
