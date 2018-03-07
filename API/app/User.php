<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model {
    protected $fillable = [
        'role'
    ];
}
/**
 * A basic user class, extended to use Passport for API auth.
 * Author: Ray Winkelman
 */
class User extends Authenticatable
{
    use  HasApiTokens, Notifiable;

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

    /**
     * Get the product record associated with the product inventory.
     */
    public function userRole()
    {
        return $this->hasMany('App\UserRole');
    }
}
