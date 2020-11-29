<?php

namespace App;

use App\Blog;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'user';
    use Notifiable;

    function blog(){
    	return $this->hasMany(Blog:: class, 'id_user');
    }

}
