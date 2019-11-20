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

class CommentsController extends Controller
{
    public function create(Request $request, $id)
    {
        // $vote = request('rating-input-1');

        $comment = Comments::create([
            'product_id' => $id,
            'user_id'    => auth()->user()->id,
            'body'       => request('body'),
            'vote'       => request('rating-input-1'),

        ]);
        return back();

    }
}
