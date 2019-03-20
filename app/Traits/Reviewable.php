<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/19/2019
 * Time: 2:32 PM
 */

namespace Framework\Traits;


use Framework\Models\Review;

trait Reviewable
{
    public function reviews()
    {
        return $this->hasMany(Review::class, 'tutor_id');
    }

    public function avgRating()
    {
        return $this->reviews->avg('rating');
    }
}
