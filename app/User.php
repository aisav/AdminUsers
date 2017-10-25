<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function role() {

//        The model that calls $this->belongsTo() is the owned model in one-to-one and many-to-one relationships
// and holds the key of the owning model.
        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){


        if ($this->role()->name == 'administrator'){
            return true;
        }
        return false;
    }
}
