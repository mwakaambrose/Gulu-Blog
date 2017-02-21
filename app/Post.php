<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	/**
     * Relationship between the post and the comments
     * @param 
     * @return void 
     */
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    /**
     * Relationship between the post and the likes.
     * @param 
     * @return void 
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
