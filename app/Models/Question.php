<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }

}
