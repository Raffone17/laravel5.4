<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;

class User extends Authenticatable
{
    use Notifiable;
    use FormAccessible;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function isAdmin()
    { 
        if ($this->role == 'Admin'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the user’s role
     *
     * @param  int  $value
     * @return string
     */
    public function getRoleAttribute($value)
    {
        if($value > 1){
            return 'Admin';
        }else{
            return 'User';
        }
    }

    /**
     * Set the user’s role
     *
     * @param  string  $value
     * @return int
     */
    public function setRoleAttribute($value)
    {

        if(strcasecmp($value,'admin') == 0){
            $this->attributes['role'] = 2;
        }else{
            $this->attributes['role'] = 1;
        }
    }

    /**
     * Get the user' role
     *
     * @param  string  $value
     * @return string
     */
    /*public function formRoleAttribute($value)
    {
        return $value;
    }*/
}
