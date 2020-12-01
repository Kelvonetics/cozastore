<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    public function __construct()
    {
        $this->middleware('auth');
    }
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response   
     */
    
    public function index()
    { 
        $product = \App\ProductImage::orderBy('id', 'asc')->paginate(8);

        $category_1 = \App\Product::where('category_id', '1')->orderBy('id', 'desc')->first();
        $category_2 = \App\Product::where('category_id', '2')->orderBy('id', 'desc')->first();
        $category_3 = \App\Product::where('category_id', '3')->orderBy('id', 'desc')->first();

        //dd($category_1);
        
        return view('welcome', compact('product', 'product_id', 'category_1', 'category_2', 'category_3'));
    }



    public function productQuickView (Request $request)
    {
        $prod_quick_view = \App\ProductImage::where('id', $request->id)->first();

        $prod_infos = \App\ProductImage::where('id', $request->id)->first();
        $colors = \App\ProductColor::where('id', $request->id)->get();
        $sizes = \App\ProductFeature::where('id', $request->id)->where('type_id', '1')->get();

         return view('products.modals.productQuickView ', compact('prod_quick_view', 'prod_infos', 'colors', 'sizes'));
    }



}

