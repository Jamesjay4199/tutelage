<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}
