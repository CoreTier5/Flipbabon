<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
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
        'profile', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password1', 'remember_token',
    ];
    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }
    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = ucfirst($value);
    }
}