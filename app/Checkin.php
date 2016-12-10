<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    /*
     * Get the user that owns this checkin
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /*
     * Get the user that owns this checkin
     */
    public function comment(){
        return $this->belongsTo(Comment::class);
    }

    public function cache(){
        return $this->hasOne(Cache::class);
    }



}
