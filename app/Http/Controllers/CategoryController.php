<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Excel;


class CategoryController extends Controller
{
    // //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response   
     */
    
    public function index()
    {    
      $category = \App\Category::orderBy('id', 'des')->get();

      $display = \App\Status::orderBy('value', 'asc')->get();

        return view('categories.index', compact('category', 'display'));
    }
	


    public function addCategories(Request $request)
    {
      try
      {
        //INSERTING 
          $add_cate = \App\Category::updateOrCreate
            (['id'=> $request->id],
            [                
               'category_name' => $request->category_name,
               'description' => $request->description,
               'position' => $request->position,
               'display_id' => $request->display_id,
               'created_by' => \Auth::user()->id,
               'updated_by' => \Auth::user()->id,
           ]);


          if($request->ajax())
             {
                $category_details = ['category'=>$add_cate->category_name, 'description'=>$add_cate->description, 'position'=>$add_cate->position, 'display'=>$add_cate->displays->value, 'id'=>$add_cate->id];        

                 return response()->json(['status'=>'ok', 'message'=>$category_details, 'info'=>'New Category Added Successfully.']);
             }
             else
             {
                return redirect()->route('categories')->with('info', 'Category Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function editCategories(Request $request)
    {
         $CATEGORY = \App\Category::where('id', $request->id)->first();

         $one_dis = \App\Status::where('id', $CATEGORY->display_id)->first(); 
         $all_dis = \App\Status::orderBy('value', 'asc')->get();

         return view('categories.modals.editCategories', compact('CATEGORY', 'one_dis', 'all_dis'));
    }
}
