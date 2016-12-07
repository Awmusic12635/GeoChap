<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
    //
    /*
     * Get the user that owns this cache
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}