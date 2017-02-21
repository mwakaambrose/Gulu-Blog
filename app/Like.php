<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    
    /**
     * description
     * 
     * @param 
     *
     * @return void description
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
