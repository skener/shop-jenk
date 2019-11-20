<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $count      = Cart::count();
        $categories = Category::orderBy('sort_order', 'asc')->get();

        // $productsOrder = Product::orderBy('created_at', 'desc')->orderBy('price', 'asc')->paginate(6);
        $productsOrder = Product::where('active', '=', 1)->orderBy('created_at', 'desc')->orderBy('price', 'asc')->paginate(6);

        return view('welcome', compact('categories', 'productsOrder', 'count'));
    }

}
