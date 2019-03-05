<?php

namespace App;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmailContract
{
    protected $table='users';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'image', 'name', 'email', 'phone', 'password','verification_token', 'category'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $with = ['AssignCampaign'];
    
    public function AssignCampaign(){
        return $this->hasMany(AssignCampaign::class, 'user_id');
    }
}
