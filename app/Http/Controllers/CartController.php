<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Excel;

class CartController extends Controller
{
    //
    
    public function index()
    {   
    	$user_id = \Auth::user()->id;
    	$cart = \App\Cart::where('user_id', $user_id)->orderBy('id', 'desc')->get();

        return view('cart.index', compact('cart'));
    }




    public function addProductToCart(Request $request)
    {
    	$product_id = $request->product_id;       $user_id = $request->user_id;
        $prod_cart = \App\Cart::where('product_id', $product_id)->where('user_id', $user_id)->first();
        if($prod_cart || $request->id != '')
        {
            if($request->ajax())
             {   $product_name = $prod_cart->product->product_name;
                 return response()->json(['status'=>'error', 'info'=>'Sorry, This Item '.$product_name.' Already Exist In Your Cart !  &#13;&#10; Please Check Your Cart.']);
             }
             else { goto add_to_cart; }             
        }

        else { goto add_to_cart; }  
        {
          add_to_cart:
	      try
	      {

	        //INSERTING 
	          $add_cart = \App\Cart::updateOrCreate
	            (['id'=> $request->id],
	            [                
	               'product_id' => $request->product_id,
	               'user_id' => $request->user_id,
	               'quantity' => $request->quantity,
	               'order_id' => $request->order_id,
	               'color' => $request->color,
	               'feature' => $request->feature,
	               'attribute' => $request->attribute,
	               'stage' => $request->stage,
	               'created_by' => \Auth::user()->id,
	               'updated_by' => \Auth::user()->id,
	           ]);


	          if($request->ajax())
	             {
	                $cart_details = ['product'=>$add_cart->product->product_name, 'user'=>$add_cart->user->name, 'quantity'=>$add_cart->quantity, 'order_id'=>$add_cart->order_id, 'color'=>$add_cart->color, 'feature'=>$add_cart->feature, 'attribute'=>$add_cart->attribute, 'stage'=>$add_cart->stage, 'id'=>$add_cart->id];        

	                 return response()->json(['status'=>'ok', 'message'=>$cart_details, 'info'=>'Product Added To Cart Successfully.']);
	             }
	             else
	             {
	                return redirect()->route('home')->with('info', 'Product Added To Cart Successfully');
	             }
	        }
	        catch (\Exception $e) 
	        {
	              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
	        }
	     }

    }

    public function removeItemFromCart(Request $request)
    {
      try
      {
        //Delete 
        $id = $request->idd;
          $remove_item = \App\Cart::where('id', $id)->delete();

          if($request->ajax())
             {
				return response()->json(['status'=>'ok', 'message'=>$cart_details, 'info'=>'Item Was Removed From Cart Successfully.']);
             }
             else
             {
                return redirect()->route('cart')->with('info', 'Item Was Removed From Cart Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function updateItemQtyInCart(Request $request)
    {
        try
      {
          $data = array(
              'quantity' => $request->input('upd_qty'),
              'updated_at' => date('Y-m-d h:i:s')
          );

          $id = $request->id;
          \App\Cart::where('id', $id)->update($data);

        if($request->ajax())
             {                
				return response()->json(['status'=>'ok', 'message'=> '', 'info'=>'Item Quantity Updated In Cart Successfully.']);
             }
             else
             {
                return redirect()->route('cart')->with('info', 'Item Quantity Updated In Cart Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }


    public function rateProduct(Request $request)
    {
      try
      {

        //INSERTING 
          $add_rate = \App\FeedbackAndReview::updateOrCreate
            (['id'=> $request->id],
            [                
               'product_id' => $request->product_id,
               'title' => $request->title,
               'review' => $request->review,
               'ratings' => $request->ratings,
               'created_by' => \Auth::user()->id,
               'updated_by' => \Auth::user()->id,
           ]);


          if($request->ajax())
             {
                $rate_details = ['product'=>$add_rate->product->product_name, 'title'=>$add_rate->title, 'review'=>$add_rate->review, 'ratings'=>$add_rate->ratings, 'id'=>$add_rate->id];        

                 return response()->json(['status'=>'ok', 'message'=>$rate_details, 'info'=>'Product Review Posted Successfully.']);
             }
             else
             {
                return redirect()->route('home')->with('info', 'Product Review Posted Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }


    public function checkout()
    {
    	return view('cart.checkout');
    }





    public function addUsers(Request $request)
    {
        try
        {   
             $pass = $request->password;
             $password = bcrypt($pass);  

            //INSERTING NEW USER
            $add_user = \App\User::updateOrCreate
            (['id'=> $request->id],
            [              
                 'name' => $request->name,
                 'email' => $request->email,
                 'password' => $password,
                 'role' => $request->role,
                 'created_by' => \Auth::user()->name,
             ]);

            $add_addr = \App\CustomerAddress::updateOrCreate
            (['id'=> $request->id],
            [              
                 'user_id' => $add_user->id,
                 'address' => $request->address,
                 'city' => $request->city,
                 'state' => $request->state,
                 'country' => $request->country,
                 'created_by' => \Auth::user()->id,
                 'updated_by' => \Auth::user()->id,
             ]);


            if($request->ajax())
             {
                $user_details = ['name'=>$add_user->name, 'email'=>$add_user->email, 'role'=>$add_user->roles->role_name, 'id'=>$add_user->id];        

                 return response()->json(['status'=>'ok', 'message'=>$user_details, 'info'=>'Your Details Was Added Successfully.']);
             }
             else
             {
                return redirect()->route('cart.checkout')->with('info', 'User Details Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }
}
