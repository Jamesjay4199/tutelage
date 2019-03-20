<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
