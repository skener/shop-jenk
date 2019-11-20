<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ProductFormRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        //return view ( 'home' );
        $products = Product::all();

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $category = Category::all();

        return view('admin.product.create', compact("category"));

    }

    public function activate(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        if ($product->active == 1) {
            $product->active = 0;
            $product->save();

            return $product->active;
        } else {
            $product->active = 1;
            $product->save();

            return $product->active;
        }

    }

    public function store(ProductFormRequest $request)
    {
        $image        = $request->image;
        $imageNewName = time() . $image->getClientOriginalName();
        $image->move('uploads/product/', $imageNewName);
        $product = Product::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => 'uploads/product/' . $imageNewName,
            'category_id' => $request->category_id,
            'price'       => $request->price,
        ]);

        Session::flash('Success', 'Пост збережений');
        return redirect()->route('admin.product.index');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.product.show', compact('product'));

        return redirect('admin/product');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.edit')->with('product', $product)->with('category', Category::all());
    }

    public function update(ProductFormRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($request->hasFile('image')) {
            $image        = $request->image;
            $imageNewName = time() . $image->getClientOriginalName();
            $image->move('uploads/product', $imageNewName);
            $product->image = 'uploads/product/' . $imageNewName;

        }
        $product->title       = $request->title;
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->category_id = $request->category_id;
        $product->save();
        Session::flash('Success', 'Пост успішно оновлений!');

        return redirect()->route('admin.product.index');

    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('Success', 'Пост успішно видалений!');

        return redirect()->route('admin.product.index');
    }

}
