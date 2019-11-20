<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsOrder extends Model
{
    protected $table    = 'products_order';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

    public function product()
    {
        $this->belongsTo('App\Product');
    }
    public function order()
    {
        $this->belongsTo('App\Order');
    }
}
