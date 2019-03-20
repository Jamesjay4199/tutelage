<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
