<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index($id)
    {

        // $showProducts = Product::where('category_id', '=', $id)->where('active', '=', 1)->paginate(6);
        $showProducts = Product::where('category_id', '=', $id)->where('active', '=', '1')->paginate(6);
        // $showBestProducts = Product::where('category_id', '=', $id)->orderBy('price', 'asc')->paginate(3);
        $showBestProducts = Product::where('category_id', '=', $id)->where('active', '=', '1')->orderBy('price', 'desc')->paginate(3);

        $categories = Category::orderBy('sort_order', 'asc')->get();
        $count      = Cart::count();
        return view('category.index', compact('categories', 'showProducts', 'showBestProducts', 'count'));
    }
}
