<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function lgas()
    {
       return $this->hasMany(Lga::class, 'state_id');
    }
}
