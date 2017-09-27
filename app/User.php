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
        'name', 'email', 'password', 'is_confirmed', 'is_blocked', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /** */
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = $value;
        $this->attributes['gravatar'] = md5(strtolower(trim($value)));
    }

    /** */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /** */
    public function isAdmin()
    {
        return $this->is_admin;
    }

    /** */
    public function isConfirmed()
    {
        return $this->is_confirmed;
    }

    /** */
    public function isBlocked()
    {
        return $this->is_blocked;
    }

    /** */
    public function isConfirmedAndNotBlocked()
    {
        return $this->is_confirmed && !$this->is_blocked;
    }
}
