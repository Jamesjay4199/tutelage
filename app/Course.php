<?php

namespace Framework;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category(){
        return $this->belongsTo(\Framework\Category::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
