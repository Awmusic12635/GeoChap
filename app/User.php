<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_admin' => 'boolean',
        'is_mod'=>'boolean',
        'enabled'=>'boolean'
    ];


    /*
     * Get all the caches for the user
     */
    public function caches(){
        return $this->hasMany(Cache::class);
    }

    /*
     * Get all the caches for the user
     */
    public function checkins(){
        return $this->hasMany(Checkin::class);
    }

    public function eventCheckins(){
        return $this->hasMany(EventCheckin::class);
    }


}
