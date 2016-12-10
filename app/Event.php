<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function checkins(){
        return $this->hasMany(EventCheckin::class);
    }
    protected $dates = [
        'created_at',
        'updated_at',
        'start_date',
        'end_date'
    ];
}
