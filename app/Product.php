<?php

namespace App;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Buyable {

	protected $fillable = [
		'title',
		'description',
		'price',
		'category_id',
		'active',
		'image',
	];

	//get full path to image
	public function getImageAttribute ( $image ) {
		return asset ( $image ) ?? '';
	}


	public function getBuyableIdentifier ( $options = null ) {
		return $this->id;
	}

	public function getBuyableDescription ( $options = null ) {
		return $this->name;
	}


	public function getBuyablePrice ( $options = null ) {
		return $this->price;
	}


	public function orders () {
		return $this->hasMany  ( 'App\ProductsOrder' );
	}


	public function category () {
		return $this->belongsTo ( 'App\Category' );
	}

    public function comment()
    {
        return $this->hasMany('App\Comments');
    }

}
