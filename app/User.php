<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    // use Notifiable;
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
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
     * has_many relation to adresses - user can have many adresses
     */
    public function addresses() {
        return $this->hasMany('App\Address');
    }
}
