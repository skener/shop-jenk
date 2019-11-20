<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function index()
    {

        $cartcontent = Cart::content();
        $total       = Cart::subtotal();
        $count       = Cart::count();

        return view('cart.index', compact('cartcontent', 'count', 'total'));

    }

    public function addToCart($id)
    {

        $product = Product::find($id);

        $name  = $product->title;
        $price = $product->price;

        Cart::add($id, $name, 1, $price, ['size' => 'large', 'image' => $product->image]);
        $total = Cart::subtotal();

        $categories = Category::orderBy('sort_order', 'asc')->get();
        $count      = Cart::count();

        $cartcontent = Cart::content();
        // dd($cartcontent);
        return redirect(route('cart'));
        // return view('cart.index', compact('categories', 'cartcontent', 'count', 'total'));

    }

    public function remove($id)
    {
        // Cart::remove($id);
        // return redirect(route('cart'));

        // $cart        = Session::get('cart');
        // $cartcontent = Cart::content();
        // foreach ($cartcontent as $cont) {
        //     $qty = $cont->qty;
        // }
        // $qty;
        $cart = Cart::content();
        $qty  = $cart->where('rowId', $id)->first()->qty;
        $qty--;
        Cart::update($id, $qty);
        // dd($cartcontent);
        return redirect(route('cart'));
    }

    public function deletecart()
    {
        Cart::destroy();
        return redirect(route('home'));

    }

    public function addQuantity(Request $request, $id)
    {
        $cart = Cart::content();
        $qty  = $cart->where('rowId', $id)->first()->qty;
        $qty++;
        Cart::update($id, $qty);

        return [
            'total'       => Cart::total(),
            'qty'         => $qty,
            'cartcontent' => Cart::content(),
            'subtotal'    => Cart::subtotal(),
            'count'       => Cart::count(),
        ];

        // return response()->json($items);
        //        return response()[
        //            'total' => Cart::total(),
        //            'qty' = $cart->where('rowId', $id)->first()->qty,

        //        ];
        // $id = $_GET['id'];
        // $product = Product::findOrFail($id);
        // $id   = $request->id;
        // $qty1 = $request->qty;

        // $cart = Cart::content();
        // $qty  = $cart->where('rowId', $id)->first()->qty;
        // $qty++;
        // $reduce = Cart::update($id, $qty1);
        // // return redirect(route('cart'));

    }

    public function reduceQuantity(Request $request, $id)
    {

        // $id = $_GET['id'];
        // $product = Product::findOrFail($id);
        // return $request;

        // $cart = Cart::content();
        // $qty  = $cart->where('rowId', $id)->first()->qty;
        // $qty--;
        // $reduce = Cart::update($id, $qty);
        //
        // $cart = Cart::content();
        $item = Cart::get($id);
        // if ($item->qty < 2) {
        //     Cart::remove($id);
        //     return [
        //         'total'       => Cart::total(),
        //         'qty'         => 0,
        //         'cartcontent' => Cart::content(),
        //         'subtotal'    => Cart::subtotal(),
        //         'count'       => Cart::count(),
        //     ];
        // }
        // $qty = $item->qty;
        Cart::update($id, --$item->qty);

        // $qty = $cart->where('rowId', $id)->first()->qty;
        // if ($qty >= 2) {
        //     $qty--;

        return [
            'total'       => Cart::total(),
            'qty'         => $item->qty,
            'cartcontent' => Cart::content(),
            'subtotal'    => Cart::subtotal(),
            'count'       => Cart::count(),
        ];
        // } else {
        //     return false;
        // }

    }
}
