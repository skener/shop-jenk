<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable {
	use Notifiable;

	protected $table = 'users';


	protected $fillable = [
		'name',
		'email',
		'password',
		'role'
	];
	protected $hidden = [
		'password',
		'remember_token',
	];

	//checks if user role  are what you want
	public function hasRole ( $role ) {
		return $this->role == $role;
	}
	public function orders () {
		return $this->belongsToMany     ( 'App\Order' );
	}
}