<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}
