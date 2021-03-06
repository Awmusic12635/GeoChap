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

    public function checkin(){
        return $this->hasMany(Checkin::class);
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'approved' => 'boolean',
    ];
}
