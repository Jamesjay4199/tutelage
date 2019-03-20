<?php

namespace Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function courses(){
        return $this->hasMany(\Framework\Course::class);
    }
}
