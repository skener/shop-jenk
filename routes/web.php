<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get ( '/', function () {
//     return view ( 'welcome' );
// } );

Route::get('/', 'WelcomeController@welcome')->name('home');

Route::get('/showcategory/{id}', 'CategoryController@index')->name('category.show');

Route::post('/search', 'SearchController@search')->name('search');
Route::get('/showselected/{id}', 'ProductController@index')->name('showselectedproduct');
Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/cart/{id}/reduce', 'CartController@reduceQuantity')->name('qty.reduce');
Route::post('/cart/{id}/add', 'CartController@addQuantity')->name('qty.add');

Route::post('/order', 'OrderController@createOrder')->name('order');

Route::post('/subscribe', 'SubscribersController@index')->name('subscribers');
Route::post('/create/comment/{id}', 'CommentsController@create')->name('createcomment');

Route::get('/addtocart/{id}', 'CartController@addToCart')->name('addtocart');
Route::get('/deletefromcart/{id}', 'CartController@remove')->name('remove');
Route::get('/emptycart', 'CartController@deletecart')->name('emptycart');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([
    'middleware' => ['web', 'auth', 'role:admin'],
    'prefix'     => 'admin',
    'as'         => 'admin.',
], function () {

    Route::resource('product', 'Admin\ProductController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('media', 'Admin\MediaController');
    Route::resource('news', 'Admin\NewsController');
    Route::post('product/{id}/activate', ['uses' => 'Admin\ProductController@activate', 'as' => 'product.activate']);

    Route::resource('product', 'Admin\ProductController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('media', 'Admin\MediaController');
    Route::resource('news', 'Admin\NewsController');

    Route::get('/orders', [
        'uses' => 'Admin\OrdersController@index',
        'as'   => 'orders',
    ]);

});



