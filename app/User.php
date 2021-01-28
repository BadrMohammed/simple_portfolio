<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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


    public function summaries()
    {
        return $this->hasOne('App\Summary');

    }

    public function education()
    {
        return $this->hasOne('App\Education');

    }

    public function personal()
    {
        return $this->hasOne('App\Personal');

    }

    public function certificates()
    {
        return $this->hasMany('App\Certificates');

    }

    public function courses()
    {
        return $this->hasMany('App\Courses');

    }

    public function projects()
    {
        return $this->hasMany('App\Projects');

    }

    public function skills()
    {
        return $this->hasMany('App\Skills');

    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
