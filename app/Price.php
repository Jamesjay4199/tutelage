<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}
