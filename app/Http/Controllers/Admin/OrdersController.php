<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Facades\Session;
use App\Product;
use App\ProductsOrder;
use App\User;
use App\Order;

class OrdersController extends Controller {
	public function index () {

//		$userData = [
//			'name'     => 'user123',
//			'email'    => 'mail@mail.com',
//			'password' => bcrypt ( '1' ),
//		];
//
//		//$orders = $user->orders;
//
//		$products = [
//			'title'       => 'Product1',
//			'quantity'    => '3',
//			'image'       => '',
//			'category_id' => 2,
//			'description' => 'lorem',
//			'price'       => '452',
//		];
//$u = new User();
//var_dump(get_class_methods ($u));

		//$user_id = auth ()->user ()->id;
		//$user    = User::find ( 1);
		//$order = Order::all ();
		$o = Order::find (1);
		$orders=$o->products()->get();
		//$u = User::find (1);
		//$users=$u->orders ()->get();
		$p = Product::find (1);
		$products=$p->orders ()->get();
		//dd ($orders_products);

		//$p = Product::all ();
		//dd ($p);
		//$orders = $p;
		//var_dump ( get_class_methods ( $p ) );
		//print_r ( ​get_class_methods ( 'Order' ) );
//
//		}
		return view ( 'admin.orders.index')
                                        ->with('orders', $orders)
//		                                  ->with ('users',$users)
		                                  ->with ('products',$products);
		//return redirect ()->route ( 'admin.orders' );
		//return view ( 'admin.orders.index', compact ( 'products', 'userData' ) );
		//$order->user()->attach();
	}
}
