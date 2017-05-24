<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model; 

class Pengguna extends Model implements AuthenticatableContract
{
	
    use Authenticatable;
    protected $table ='pengguna';
    protected $guarded=['id'];

     protected $fillable = [
        'usename', 'password', 'level',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];
}
