<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\Product;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index($id)
    {
        $product = Product::where(['id' => $id, 'active' => 1])->firstOrFail();
        /**
         * [$categories description]
         * $categories needs for nav menu;
         * @var [type]
         */
        $categories = Category::orderBy('sort_order', 'asc')->get();

        /**
         * [$productsSession description]
         * this variable need for know what products were seen by client,first take previous date from session
         * @var [type]
         */
        // session()->forget('some_data');
        // session()->flush();
        $productsSession = session('visited');

        /**
         * [$arraysession description]
         *create array of id products
         * @var [type]
         */
        $arraysession = session()->push('visited', $id);
        /**
         * [$productsSession description]
         * this variable need for know what products were seen by client, take all date from session
         * @var [type]
         */
        $productsSession = session('visited');
        // dd($productsSession);

        /**
         * finding id of selected products
         * @var [type]
         */

        /**
         * finding id of selected category
         */

        $idCategory = $product->category_id;

        /**
         * [$productsOrder description]
         * selecting last products with price asc
         * @var [type]
         */
        // $productsBest = Product::where('category_id', '=', $idCategory)->orderBy('price', 'asc')->paginate(3);
        $productsBest = Product::where('category_id', '=', $idCategory)->where('active', '=', 1)->orderBy('price', 'asc')->paginate(3);

        /**
         * $productsOrderAll ->this is data of visiting products of person
         * @var [type]
         */
        // dd($productsSession);
        // $productsVisited
        // $productsVisited = Product::whereIn('id', $productsSession)->orderBy('price', 'desc')->paginate(6);
        $productsVisited = Product::whereIn('id', $productsSession)->where('active', '=', 1)->orderBy('price', 'desc')->paginate(3);
        $count           = Cart::count();
        $comments        = Comments::all();
        $commentsProduct = Comments::where('product_id', '=', $id)->get();
        $countComments   = count($commentsProduct);
        // dd($commentsProduct[0]->user);

        return view('product.showproduct', compact('categories', 'product', 'productsBest', 'productsVisited', 'count', 'comments', 'commentsProduct', 'countComments'));
    }
}
