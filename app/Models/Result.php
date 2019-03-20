<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
