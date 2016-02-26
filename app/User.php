<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() 
    {
        return $this->belongsToMany('App\Role');
    }

    public function hasRole($role_tag) 
    {
        foreach ( $this->roles as $role ) {
            if ( $role->name == $role_tag ) {
                return true;
            }
        }

        return false;
    }
}
