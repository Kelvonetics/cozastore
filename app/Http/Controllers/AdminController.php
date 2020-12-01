<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    //	
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {

        return view('admin.index');
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

            if($request->ajax())
             {
                $user_details = ['name'=>$add_user->name, 'email'=>$add_user->email, 'role'=>$add_user->roles->role_name, 'id'=>$add_user->id];        

                 return response()->json(['status'=>'ok', 'message'=>$user_details, 'info'=>'New User Added Successfully.']);
             }
             else
             {
                return redirect()->route('settings')->with('info', 'User Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }



    public function editUsers(Request $request)
    {
         $USER = \App\User::where('id', $request->id)->first();

         $one_rol = \App\Role::where('id', $USER->role)->first(); 
         $all_rol = \App\Role::orderBy('role_name', 'asc')->get(); 
         return view('Settings.modals.editUsers',compact('USER', 'one_rol', 'all_rol'));
    }

    public function updateUser(Request $request)
    {
          $data = array(
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'role' => $request->input('role'),
              'updated_at' => date('Y-m-d h:i:s')
          );

          $id = $request->id;
          \App\User::where('id', $id)->update($data);
          return redirect()->route('settings')->with('info', 'User Details Updated Successfully');
    }




    public function addRoles(Request $request)
    {
        try
        {  
            //INSERTING NEW Role
            $add_r = \App\Role::updateOrCreate
            (['id'=> $request->id],
            [                
                 'role_name' => $request->role_name,
                 'created_by' => \Auth::user()->name,
             ]);

            //INSERTING NEW USER PERMISSIONS
            $add_perm = \App\Permission::updateOrCreate
            (['role'=> $request->id],
              [
                 'role' => $add_r->id,
                 'acc_add' => '0',
                 'acc_edit' => '0',
                 'acc_view' => '0',
                 'acc_report' => '0',
                 'admin' => '0',
                 'settings' => '0',
                 'setup' => '0',
                 'other' => '0'
             ]);


            if($request->ajax())
             {
                $role_details = ['role_name'=>$add_r->role_name, 'id'=>$add_r->id];        

                 return response()->json(['status'=>'ok', 'message'=>$role_details, 'info'=>'New Role Added Successfully.']);
             }
             else
             {
                return redirect()->route('settings')->with('info', 'Role Updated Successfully');
             }
        } 
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }
    }

    public function editRoles(Request $request)
    {
         $ROLE = \App\Role::where('id',$request->id)->first();

         $one_rol = \App\Role::where('id', $ROLE->role)->first(); 
         $all_rol = \App\Role::orderBy('role_name', 'asc')->get(); 
         return view('settings.modals.editRoles',compact('ROLE', 'one_rol', 'all_rol'));
    }

    public function updateRoles(Request $request)
    {
        try
        {  
            //INSERTING NEW Role
            $add_r = \App\Role::updateOrCreate
            (['id'=> $request->id],
            [                
                 'role_name' => $request->role_name,
                 'created_by' => \Auth::user()->name,
             ]);


            if($request->ajax())
             {
                $role_details = ['role_name'=>$add_r->role_name, 'id'=>$add_r->id];        

                 return response()->json(['status'=>'ok', 'message'=>$role_details, 'info'=>'New Role Added Successfully.']);
             }
             else
             {
                return redirect()->route('settings')->with('info', 'Role Updated Successfully');
             }
        } 
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }
    }




  public function change_password(Request $request)
  {
    $id = \Auth::user()->id;
    return view('settings.change-password', compact('id'));
  }

  public function update_password(Request $request)
  {
        try 
        {      
            $email = $request->email; 
            //COMPARING NEW PASSWORD
            if($email == \Auth::user()->email)
            {
              $newpass = $request->newpass;  $passconf = $request->passconf;

              //COMPARING PASSWORD
              if($newpass == $passconf)
              {  
                $newpass = $request->newpass;
                $newpass = bcrypt($newpass);               
                //INSERTING NEW USER
                $upd_pass = \App\User::updateOrCreate
                (['id'=> $request->id],
                [              
                     'password' => $newpass,
                     'created_by' => \Auth::user()->name,
                ]);

                 return redirect()->route('settings.change-password')->with('info', 'Password Changed Successfully'); 
              }  
               else
               {
                  return redirect()->route('settings.change-password')->with('errors', 'Sorry, New Password Do Not Match');
               }

            }
             else
             {
                return redirect()->route('settings.change-password')->with('errors', 'Sorry, Email  Does Not Exist');
             }
            
        }
        catch (\Exception $e) 
        {
              return  redirect()->route('errors', 'Sorry, An Error Occured Please Try Again. ' .$e->getMessage());
        }

  }


  public function settings()
  {
    $roles = \App\Role::orderBy('role_name', 'asc')->get(); 
    $Roles = \App\Role::orderBy('id', 'desc')->paginate(10); 

    return view('settings.index', compact('Roles', 'roles'));
  }


  public function updatePermissions(Request $request)
  {
     try
     {
         $data = array
         (
              //'role' => $request->input('role'),
              'acc_add' => $request->input('acc_add'),
              'acc_edit' => $request->input('acc_edit'),
              'acc_view' => $request->input('acc_view'),
              'acc_report' => $request->input('acc_report'),
              'admin' => $request->input('admin'),
              'settings' => $request->input('settings'),
              'setup' => $request->input('setup'),
              'other' => $request->input('other'),
              'updated_at' => date('Y-m-d h:i:s')
          );

          $id = $request->role_id;
          $upd_permissions = \App\Permission::where('id', $id)->update($data);
          if($upd_permissions)
          {
            return redirect()->route('settings')->with('info', 'Role Permission(s) \ Priviledge(s) Updated Successfully');
          }
          else
          {
             return redirect()->route('settings')->with(['status'=>'error', 'info'=>'Could Not Update Permission. ']);
          }
     } 
      catch (\Exception $e) 
      {
            return redirect()->route('settings')->with(['status'=>'error', 'info'=>'Sorry, An Error Occured. ' .$e->getMessage()]);
      }  
  }


  public function editPermissions(Request $request)
    {
      try
      {
        //INSERTING 
         $data = array
         (
              //'role' => $request->input('role'),
              'acc_add' => $request->input('acc_add'),
              'acc_edit' => $request->input('acc_edit'),
              'acc_view' => $request->input('acc_view'),
              'acc_report' => $request->input('acc_report'),
              'settings' => $request->input('settings'),
              'updated_at' => date('Y-m-d h:i:s')
          );

          $id = $request->role_id;
          $upd_permissions = \App\Permission::where('id', $id)->update($data);
          if($upd_permissions)
          {   
               return redirect()->route('settings')->with('info', 'Users Role Permission Updated Successfully');
          }
          else
          {
               return redirect()->route('settings')->with(['status'=>'error', 'info'=>'Could Not Update. ']);
          }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occured Please Try Again. ' .$e->getMessage()]);
        }

    }

    // public function editPermissions(Request $request)
    // {
    //      $PERM = \App\Permission::where('id',$request->id)->first();
    //      return view('Settings.modals.editPermissions',compact('PERM'));
    // }














//##################### SETUP ########################
	
	 public function dashboard()
    {
       $top_product = \App\Product::orderBy('unit_price', 'desc')->take(5)->get(); 
       $top_category = \App\Product::orderBy('category_id', 'desc')->take(5)->get();
       $top_cart = \App\Cart::orderBy('product_id', 'desc')->take(5)->get(); 

        return view('admin.dashboard', compact('top_product', 'top_category', 'top_cart'));
    }








    public function addCompany(Request $request)
    {
      try
      {

        //INSERTING 
          $add_comp = \App\Companies::updateOrCreate
            (['id'=> $request->id],
            [                
               'company_name' => $request->company_name,
               'Company' => $request->Company,
               'Qualification' => $request->Qualification,
               'Operation' => $request->Operation,
               'Address' => $request->Address,
               'State_Id' => $request->State_Id,
               'created_by' => \Auth::user()->name,
           ]);


          if($request->ajax())
             {
                $company_details = ['company_name'=>$add_comp->company_name, 'Company'=>$add_comp->company_name, 'Qualification'=>$add_comp->qualifications->Qualification, 'Operation'=>$add_comp->Operation, 'Address'=>$add_comp->Address, 'State_Id'=>$add_comp->State_Id, 'id'=>$add_comp->id];        

                 return response()->json(['status'=>'ok', 'message'=>$company_details, 'info'=>'New Company Added Successfully.']);
             }
             else
             {
                return redirect()->route('admin')->with('info', 'Company Updated Successfully');
             }
        }
        catch (\Exception $e) 
        {
              return  response()->json(['status'=>'error', 'info'=>'Sorry, An Error Occur Please Try Again. ' .$e->getMessage()]);
        }

    }

    public function editCompany(Request $request)
    {
         $COMPANY = \App\Companies::where('id',$request->id)->first();

         $one_qua = \App\Qualifications::where('id', $COMPANY->Qualification)->first();     $all_qua = \App\Qualifications::orderBy('Qualification', 'asc')->get();
         $one_sta = \App\State::where('id', $COMPANY->State_Id)->first();     $all_sta = \App\State::orderBy('state_name', 'asc')->get();
         return view('admin.modals.editCompany',compact('COMPANY', 'one_sta', 'all_sta', 'one_qua', 'all_qua'));
    }


    public function viewCompanyDetails($id)
    {
         $comp = \App\Companies::where('id', $id)->first();
         $comp_leases = \App\Producing_License::where('Company', $id)->get();
         $comp_fields = $comp->fields; 
         $comp_facs = \App\Facilities::where('Company', $id)->get();

         return view('admin.view.viewCompanyDetails', compact('comp', 'comp_leases', 'comp_fields', 'comp_facs'));
    }
    
    


	
}
