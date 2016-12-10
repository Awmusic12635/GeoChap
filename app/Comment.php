<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /*
     * Returns checkin that comment belongs to
     */

    public function checkin(){
        return $this->hasOne(Checkin::class);
    }
}
