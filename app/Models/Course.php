<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_course');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'course_id');
    }
}
