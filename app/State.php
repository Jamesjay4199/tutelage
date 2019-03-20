<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function users(){
        return $this->hasMany(\Framework\User::class);
    }

    public function lgas(){
        return $this->hasMany(\Framework\Lga::class);
    }
}
