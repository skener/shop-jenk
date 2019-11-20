<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
	protected $table = 'orders';
	protected $fillable = [
		'user_id'
	];

	public function users () {
		return $this->belongsToMany ()    ( 'App\User');
	}

	public function products () {
		return $this->belongsToMany    ( 'App\Product' ,'products_order');
	}

}
