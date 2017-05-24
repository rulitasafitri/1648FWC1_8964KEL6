<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model; 

class pengguna extends Model implements AuthenticatableContract
{
	
    use Authenticatable;

    protected $table = 'pengguna';
    protected $fillable = ['username','password','level'];

    public function admin(){
   	return $this->belongsTo(admin::class);
   }

    public function petugas(){
   	return $this->belongsTo(petugas::class);
   }
}
