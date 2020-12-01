<?php

use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () 
{
    return view('auth.login');
});*/



Route::post('/authenticate', 'Auth\Login@authenticate')->name('authenticate');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/modals/productQuickView', 'HomeController@productQuickView')->name('products.productQuickView');

//ADMIN
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('dashboard');


//PRODUCT
Route::get('/products', 'ProductController@index')->name('products');

Route::post('/products/addProducts', 'ProductController@addProducts')->name('products.addProducts');
Route::get('/products/modals/editProducts', 'ProductController@editProducts')->name('products.editProducts');

Route::post('/products/addProductPhotos', 'ProductController@addProductPhotos')->name('products.addProductPhotos');

Route::post('/products/addProductAttributes', 'ProductController@addProductAttributes')->name('products.addProductAttributes');
Route::get('/products/modals/editProductAttributes', 'ProductController@editProductAttributes')->name('products.editProductAttributes');

Route::post('/products/addProductColors', 'ProductController@addProductColors')->name('products.addProductColors');
Route::get('/products/modals/editProductColors', 'ProductController@editProductColors')->name('products.editProductColors');

Route::post('/products/addProductFeatures', 'ProductController@addProductFeatures')->name('products.addProductFeatures');
Route::get('/products/modals/editProductFeatures', 'ProductController@editProductFeatures')->name('products.editProductFeatures');



//SHOES
Route::get('/products/category/{id}', 'ProductController@products')->name('products.category');


//Category
Route::get('/categories', 'CategoryController@index')->name('categories');

Route::post('/categories/addCategories', 'CategoryController@addCategories')->name('categories.addCategories');
Route::get('/categories/modals/editCategories', 'CategoryController@editCategories')->name('categories.editCategories');



//CART
Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/cart/addProductToCart', 'CartController@addProductToCart')->name('cart.addProductToCart');
Route::post('/cart/removeItemFromCart', 'CartController@removeItemFromCart')->name('cart.removeItemFromCart');
Route::post('/cart/updateItemQtyInCart', 'CartController@updateItemQtyInCart')->name('cart.updateItemQtyInCart');
Route::post('/cart/rateProduct', 'CartController@rateProduct')->name('cart.rateProduct');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');

Route::post('/cart/addUsers', 'CartController@addUsers')->name('cart.addUsers');





Route::resource('ajax','AjaxController');
Route::get('/getCompany','AjaxController@getCompany'); 




