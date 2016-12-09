<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCheckin extends Model
{
    public function user(){
        return $this->hasOne(User::class);
    }

    public function event(){
        return $this->hasOne(Event::class);
    }
}
