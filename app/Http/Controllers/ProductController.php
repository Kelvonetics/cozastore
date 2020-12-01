<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Excel;

class ProductController extends Controller
{
    //
    /**
    public function __construct()
    {
        $this->middleware('auth');
    }

     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response   
     */
    
    public function index()
    {    
    	$product = \App\Product::orderBy('id', 'desc')->get();
      $prod_image = \App\ProductImage::orderBy('id', 'desc')->get();
      $prod_attribute = \App\ProductAttribute::orderBy('id', 'desc')->get();
      $prod_color = \App\ProductColor::orderBy('id', 'desc')->get();
      $prod_feature = \App\ProductFeature::orderBy('id', 'desc')->get();

    	$categories = \App\Category::orderBy('category_name', 'asc')->get();
      $prod_photos = $prod_attrs = $prod_col = $prod_feat = \App\Product::orderBy('product_name', 'asc')->get();


      $feature = $display = \App\Status::orderBy('value', 'asc')->get();
      $condition = \App\Condition::orderBy('value', 'asc')->get();

        return view('products.index', compact('product', 'prod_image', 'prod_attribute', 'categories', 'prod_photos', 'prod_attrs', 'prod_color', 'prod_feature', 'feature', 'display', 'condition', 'prod_col', 'prod_feat'));
    }
	


    public function addProducts(Request $request)
    {
      try
      {
        //INSERTING 
          $add_prod = \App\Product::updateOrCreate
            (['id'=> $request->id],
            [                
               'category_id' => $request->category_id,
               'product_name' => $request->product_name,
               'title' => $request->title,
               'description' => $request->description,
               'cost_price' => $request->cost_price,
               'unit_price' => $request->unit_price,
               'quantity' => $request->quantity,
               'display' => $request->display,
               'created_by' => \Auth::user()->id,
               'updated_by' => \Auth::user()->id,
           ]);


          if($request->ajax())
             {
                $product_details = ['category_id'=>$add_prod->category->category_name, 'product_name'=>$add_prod->product_name, 'title'=>$add_prod->title, 'description'=>$add_prod->description, 'cost_price'=>$add_prod->cost_price, 'unit_price'=>$add_prod->unit_price, 'quantity'=>$add_prod->quantity, 'display'=>$add_prod->status_display->value, 'id'=>$add_prod->id];        

                 return response()->json(['status'=>'ok', 'message'=>$product_details, 'info'=>'New Product Added Successfully.']);
             }
             else
             {
                return redirect()->route('products')->with('info', 'Product Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function editProducts(Request $request)
    {
         $PRODUCT = \App\Product::where('id', $request->id)->first();

         $one_cat = \App\Category::where('id', $PRODUCT->category_id)->first(); 
         $all_cat = \App\Category::orderBy('category_name', 'asc')->get();
         $one_dis = \App\Status::where('id', $PRODUCT->display)->first(); 
         $all_dis = \App\Status::orderBy('value', 'asc')->get();

         return view('products.modals.editProducts', compact('PRODUCT', 'one_cat', 'all_cat', 'one_dis', 'all_dis'));
    }


    public function addProductPhotos(Request $request)
    {
      try
      { 
          //MULTIPLE FILE UPLOAD
          $link_1 = $request->file('image_1'); 
          //if link not provided
          if($link_1 != null)
          { 
             $file_1 = $request->file('image_1')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_1')->getClientOriginalName();
             $link_1->move($destinationPath, Input::file('image_1')->getClientOriginalName());
          }else {$file_1 = '';}

          $link_2 = $request->file('image_2'); 
          //if link not provided
          if($link_2 != null)
          { 
             $file_2 = $request->file('image_2')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_2')->getClientOriginalName();
             $link_2->move($destinationPath, Input::file('image_2')->getClientOriginalName());
          }else {$file_2 = '';}

          $link_3 = $request->file('image_3'); 
          //if link not provided
          if($link_3 != null)
          { 
             $file_3 = $request->file('image_3')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_3')->getClientOriginalName();
             $link_3->move($destinationPath, Input::file('image_3')->getClientOriginalName());
          }else {$file_3 = '';}

          $link_4 = $request->file('image_4'); 
          //if link not provided
          if($link_4 != null)
          { 
             $file_4 = $request->file('image_4')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_4')->getClientOriginalName();
             $link_4->move($destinationPath, Input::file('image_4')->getClientOriginalName());
          }else {$file_4 = '';}

          $link_5 = $request->file('image_5'); 
          //if link not provided
          if($link_5 != null)
          { 
             $file_5 = $request->file('image_5')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_5')->getClientOriginalName();
             $link_5->move($destinationPath, Input::file('image_5')->getClientOriginalName());
          }else {$file_5 = '';}

          $link_6 = $request->file('image_6'); 
          //if link not provided
          if($link_6 != null)
          { 
             $file_6 = $request->file('image_6')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_6')->getClientOriginalName();
             $link_6->move($destinationPath, Input::file('image_6')->getClientOriginalName());
          }else {$file_6 = '';}

          $link_7 = $request->file('image_7'); 
          //if link not provided
          if($link_7 != null)
          { 
             $file_7 = $request->file('image_7')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_7')->getClientOriginalName();
             $link_7->move($destinationPath, Input::file('image_7')->getClientOriginalName());
          }else {$file_7 = '';}

          $link_8 = $request->file('image_8'); 
          //if link not provided
          if($link_8 != null)
          { 
             $file_8 = $request->file('image_8')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_8')->getClientOriginalName();
             $link_8->move($destinationPath, Input::file('image_8')->getClientOriginalName());
          }else {$file_8 = '';}

          $link_9 = $request->file('image_9'); 
          //if link not provided
          if($link_9 != null)
          { 
             $file_9 = $request->file('image_9')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_9')->getClientOriginalName();
             $link_9->move($destinationPath, Input::file('image_9')->getClientOriginalName());
          }else {$file_9 = '';}

          $link_10 = $request->file('image_10'); 
          //if link not provided
          if($link_10 != null)
          { 
             $file_10 = $request->file('image_10')->getClientOriginalName();      
             $destinationPath = 'assets/images/Products/' . Input::file('image_10')->getClientOriginalName();
             $link_10->move($destinationPath, Input::file('image_10')->getClientOriginalName());
          }else {$file_10 = '';}


          $add_prod = \App\ProductImage::updateOrCreate
            (['id'=> $request->id],
            [                
               'product_id' => $request->product_id,
               'image_1' => $file_1,
               'image_2' => $file_2,
               'image_3' => $file_3,
               'image_4' => $file_4,
               'image_5' => $file_5,
               'image_6' => $file_6,
               'image_7' => $file_7,
               'image_8' => $file_8,
               'image_9' => $file_9,
               'image_10' => $file_10,
               'created_by' => \Auth::user()->id,
               'updated_by' => \Auth::user()->id,
           ]);


          if($request->ajax())
             {
                $product_details = ['product'=>$add_prod->product->product_name, 'image_1'=>$add_prod->image_1, 'image_2'=>$add_prod->image_2, 'image_3'=>$add_prod->image_3, 'image_4'=>$add_prod->image_4, 'image_5'=>$add_prod->image_5, 'image_6'=>$add_prod->image_6, 'image_7'=>$add_prod->image_7, 'image_8'=>$add_prod->image_8, 'image_9'=>$add_prod->image_9, 'image_10'=>$add_prod->image_10, 'id'=>$add_prod->id];        

                 return response()->json(['status'=>'ok', 'message'=>$product_details, 'info'=>'New Multiple Photo Uploaded Successfully.']);
             }
             else
             {
                return redirect()->route('products')->with('info', 'Multiple Product Photo Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }


    public function addProductAttributes(Request $request)
    {
      try
      {
        //INSERTING 
          $add_prod = \App\ProductAttribute::updateOrCreate
            (['id'=> $request->id],
            [                
               'product_id' => $request->product_id,
               'discount' => $request->discount,
               'feature' => $request->feature,
               'shipping_fee' => $request->shipping_fee,
               'product_condition' => $request->product_condition,
               'created_by' => \Auth::user()->id,
               'updated_by' => \Auth::user()->id,
           ]);


          if($request->ajax())
             {
                $product_details = ['product'=>$add_prod->product->product_name, 'discount'=>$add_prod->discount, 'feature'=>$add_prod->status_feature->value, 'shipping_fee'=>$add_prod->shipping_fee, 'product_condition'=>$add_prod->condition->value, 'id'=>$add_prod->id];        

                 return response()->json(['status'=>'ok', 'message'=>$product_details, 'info'=>'New Product Attribute Added Successfully.']);
             }
             else
             {
                return redirect()->route('products')->with('info', 'Product Attribute Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function editProductAttributes(Request $request)
    {
         $ATTRIBUTE = \App\ProductAttribute::where('id', $request->id)->first();

         $one_pro = \App\Product::where('id', $ATTRIBUTE->product_id)->first(); 
         $all_pro = \App\Product::orderBy('product_name', 'asc')->get();
         $one_fea = \App\Status::where('id', $ATTRIBUTE->feature)->first(); 
         $all_fea = \App\Status::orderBy('value', 'asc')->get();
         $one_con = \App\Condition::where('id', $ATTRIBUTE->condition)->first(); 
         $all_con = \App\Condition::orderBy('value', 'asc')->get();

         return view('products.modals.editProductAttributes', compact('ATTRIBUTE', 'one_pro', 'all_pro', 'one_fea', 'all_fea', 'one_con', 'all_con'));
    }


    public function addProductColors(Request $request)
    {
      try
      {

              //for loop to insert product color
              $count_color = $request->input('count_color');
              for($i = 1; $i <= $count_color; $i++)
              {

                  //Inserting Content
                  $add_color = \App\ProductColor::updateOrCreate
                (['id'=> $request->id],
                [
                     'product_id' => $request->product_id,
                     'color_name' => $request->input('color_name'.$i.''),
                     'created_by' => \Auth::user()->id,
                     'updated_by' => \Auth::user()->id,
                ]);             
              }


          if($request->ajax())
             {
                $color_details = ['product'=>$add_color->product->product_name, 'color_name'=>$add_color->color_name, 'id'=>$add_color->id];        

                 return response()->json(['status'=>'ok', 'message'=>$color_details, 'info'=>'New Product Color Added Successfully.']);
             }
             else
             {
                return redirect()->route('products')->with('info', 'Product Color Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function editProductColors(Request $request)
    {
         $COLOR = \App\ProductColor::where('id', $request->id)->first();

         return view('products.modals.editProductColors', compact('COLOR'));
    }


    public function addProductFeatures(Request $request)
    {
      try
      {

              //for loop to insert product Feature
              $count_feature = $request->input('count_feature');
              for($i = 1; $i <= $count_feature; $i++)
              {

                  //Inserting Content
                  $add_feat = \App\ProductFeature::updateOrCreate
                (['id'=> $request->id],
                [
                     'product_id' => $request->product_id,
                     'type_id' => $request->input('type_id'.$i.''),
                     'value_1' => $request->input('value_1'.$i.''),
                     'value_2' => $request->input('value_2'.$i.''),
                     'created_by' => \Auth::user()->id,
                     'updated_by' => \Auth::user()->id,
                ]);             
              }


          if($request->ajax())
             {
                $feature_details = ['product'=>$add_feat->product->product_name, 'type'=>$add_feat->type->value, 'value_1'=>$add_feat->value_1, 'value_2'=>$add_feat->value_2, 'id'=>$add_feat->id];        

                 return response()->json(['status'=>'ok', 'message'=>$feature_details, 'info'=>'New Product Feature Added Successfully.']);
             }
             else
             {
                return redirect()->route('products')->with('info', 'Product Feature Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function editProductFeatures(Request $request)
    {
         $FEATURE = \App\ProductFeature::where('id', $request->id)->first();

         return view('products.modals.editProductFeatures', compact('FEATURE'));
    }



    
    public function products($id)
    {    

      $product_by_category = \App\Product::where('category_id', $id)->orderBy('id', 'desc')->paginate(8);
      $product_category = \App\Product::where('category_id', $id)->orderBy('id', 'desc')->first();

        return view('products.products', compact('id', 'product_by_category', 'product_category'));
    }


}
