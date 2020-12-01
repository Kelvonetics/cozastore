<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        //
        switch ($id) 
        {
            //SETTINGS
            case 'Users':
                # code...
                return $this->Users();
                break;


            case 'roles':
                # code...
                return $this->roles();
                break;


            case 'permissions':
                # code...
                return $this->permissions();
                break;



            //ADMIN
            case 'company':
                # code...
                return $this->company();
                break;

            case 'contractor':
                # code...
                return $this->contractor();
                break;


            case 'facility':
                # code...
                return $this->facility();
                break;


            case 'field':
                # code...
                return $this->field();
                break;


            case 'license':
                # code...
                return $this->license();
                break;


            case 'state_lga':
                # code...
                return $this->state_lga();
                break;


            case 'incident_class':
                # code...
                return $this->incident_class();
                break;


            case 'incident_install':
                # code...
                return $this->incident_install();
                break;


            case 'incident_cause':
                # code...
                return $this->incident_cause();
                break;


            case 'incident_result':
                # code...
                return $this->incident_result();
                break;






            //ACCIDENT REGISTER
            case 'accident_register':
                # code...
                return $this->accident_register();
                break;


            //NCN REGISTER
            case 'ncn_register':
                # code...
                return $this->ncn_register();
                break;


            //NCN RESOLUTION
            case 'ncn_resolution':
                # code...
                return $this->ncn_resolution();
                break;


            //NCN WAIVER APPLICATION
            case 'ncn_waiver_application':
                # code...
                return $this->ncn_waiver_application();
                break;


            //NCN WAIVER MONITORING
            case 'ncn_waiver_monitoring':
                # code...
                return $this->ncn_waiver_monitoring();
                break;


            //NCN COMPLIANCE ISSUE
            case 'ncn_compliance_issue':
                # code...
                return $this->ncn_compliance_issue();
                break;


            //NCN Sanction Tracker
            case 'ncn_sanction_tracker':
                # code...
                return $this->ncn_sanction_tracker();
                break;


            //NCN Waiver Status
            case 'ncn_waiver_status':
                # code...
                return $this->ncn_waiver_status();
                break;






            //GARS Safety Accident
            case 'search_accident':
                # code...
                return $this->search_accident($request);
                break;

            case 'safety_accident':
                # code...
                return $this->safety_accident();
                break;
            

            //GARS Safety Case
            case 'safety_case':
                # code...
                return $this->safety_case();
                break;




            case 'filter_project_year':
                # code...
                return $this->filter_project_year($request->year);
                break;


            
            
            default:
                # code...
                break;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //SETTINGS
    private function Users()
    {
          $Users = \App\User::orderBy('id', 'desc')->paginate(10);
          return view('ajax.users', compact('Users'));
    }

    private function roles()
    {
          $roles = \App\Role::orderBy('id', 'desc')->paginate(10);
          return view('ajax.Roles', compact('roles'));
    }

    private function permissions()
    {
          $permissions = \App\Permission::orderBy('id', 'desc')->paginate(10);

          $all_roles = \App\Role::orderBy('id', 'asc')->get();
          return view('ajax.Permissions', compact('permissions', 'all_roles')); 
    }




    //ADMIN
    private function company()
    {
          $company = \App\Companies::orderBy('id', 'desc')->paginate(10);
          return view('ajax.Company', compact('company'));
    }

    private function contractor()
    {
          $contractor = \App\ContractorCompany::orderBy('id', 'desc')->paginate(10);
          return view('ajax.Contractor', compact('contractor'));
    }

    private function facility()
    {
          $facility = \App\Facilities::orderBy('id', 'desc')->paginate(10);
          return view('ajax.facility', compact('facility'));
    }

    private function field()
    {
          $field = \App\Field::orderBy('id', 'desc')->paginate(10);     
          return view('ajax.field', compact('field'));
    }

    private function license()
    {
          $license = \App\Producing_License::orderBy('id', 'desc')->paginate(10);
          return view('ajax.license', compact('license'));
    }

    private function state_lga()
    {
          $state_lga = \App\State_LGA::orderBy('id', 'desc')->paginate(10);
          return view('ajax.StateLGA', compact('state_lga'));
    }

    private function incident_class()
    {
          $incident_class = \App\IncidentClassification::orderBy('id', 'desc')->paginate(10);
          return view('ajax.IncidentClassification', compact('incident_class'));
    }

    private function incident_install()
    {
          $incident_install = \App\IncidentInstallation::orderBy('id', 'desc')->paginate(10);
          return view('ajax.IncidentInstallation', compact('incident_install'));
    }

    private function incident_cause()
    {
          $incident_cause = \App\IncidentCause::orderBy('id', 'desc')->paginate(10);
          return view('ajax.IncidentCause', compact('incident_cause'));
    }

    private function incident_result()
    {
          $incident_result = \App\IncidentResult::orderBy('id', 'desc')->paginate(10);
          return view('ajax.IncidentResult', compact('incident_result'));
    }




    //ACCIDENT REGISTER
    private function accident_register()
    {
          $accident_register = \App\AccidentRegister::orderBy('id', 'desc')->paginate(10);
          return view('ajax.AccidentRegister', compact('accident_register'));
    }

    //NCN REGISTER
    private function ncn_register()
    {
          $ncn_register = \App\NCNRegister::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNRegister', compact('ncn_register'));
    }

    //NCN RESOLUTION
    private function ncn_resolution()
    {
          $ncn_resolution = \App\NCNResolutionEvent::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNResolutionEvent', compact('ncn_resolution'));
    }

    //NCN WAIVER APPLICATION
    private function ncn_waiver_application()
    {
          $ncn_waiver_application = \App\NCNWaiverApplication::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNWaiverApplication', compact('ncn_waiver_application'));
    }

    //NCN WAIVER APPLICATION
    private function ncn_waiver_monitoring()
    {
          $ncn_waiver_monitoring = \App\NCNWaiverMonitoring::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNWaiverMonitoring', compact('ncn_waiver_monitoring'));
    }

    //NCN COMPLIANCE ISSUE
    private function ncn_compliance_issue()
    {
          $ncn_compliance_issue = \App\NCNIssueCategory::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNComplianceIssue', compact('ncn_compliance_issue'));
    }

    //NCN SANCTION TRACKER
    private function ncn_sanction_tracker()
    {
          $ncn_sanction_tracker = \App\NCNSanctionTracker::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNSanctionTracker', compact('ncn_sanction_tracker'));
    }

    //NCN WAIVER STATUS
    private function ncn_waiver_status()
    {
          $ncn_waiver_status = \App\NCNWaiverStatus::orderBy('id', 'desc')->paginate(10);
          return view('ajax.NCNWaiverStatus', compact('ncn_waiver_status'));
    }






    //GARS Safety Accident
    private function search_accident(Request $request)
    {
          $safety_accident = \App\SafetyAccident::where('Fatality', $request->search)->paginate(10);
          return view('ajax.SafetyAccident', compact('safety_accident'));
    }

    private function safety_accident()
    {
          $safety_accident = \App\SafetyAccident::orderBy('id', 'desc')->paginate(10);
          return view('ajax.SafetyAccident', compact('safety_accident'));
    }

    //GARS Safety Case
    private function safety_case()
    {
          $safety_case = \App\SafetyCaseStudy::orderBy('id', 'desc')->paginate(10);
          return view('ajax.SafetyCase', compact('safety_case'));
    }
    



    //company 
    public function getCompany(Request $request)
    {
        $comp_data = \App\Companies::where('id', $request->Company)->get();

        return response()->json($comp_data);
    }

    //Facility 
    public function getFacilities(Request $request)
    {
        $fac_data = \App\Facilities::where('id', $request->Company)->get();

        return response()->json($fac_data);
    }


    //SEARCH FUNCTIONALITY FOR SAFETY ACCIDENT 
    public function getSafetyAccident(Request $request)
    {
      if($request->filled('search'))
      {  
        $q = $request->search;      
        $safety_acc = \App\SafetyAccident::where('Incident_id',  $request->search)
                                           ->orWhere('Incident_date',  $request->search)                             
                                           ->orWhere('Fatality',  $request->search)
                                           ->orWhere('Man_over_board',  $request->search)
                                           ->orWhere('Injury',  $request->search)
                                           ->orWhere('Missing',  $request->search)
                                           ->orWhereHas('company', function($query) use ($q){  $query->where('company_name','like','%'.$q.'%');  })
                                           ->orWhereHas('facility', function($query) use ($q){  $query->where('Facility_name','like','%'.$q.'%');  })
                                           ->with(['company', 'facility'])
                                           ->get();
      }
      else
      {
        $safety_acc = \App\SafetyAccident::orderBy('id', 'desc')->get();
      }


         return response()->json($safety_acc);

    }









    public function getRolePermissions(Request $request)
    {
        $perms = \App\Permission::where('role', $request->role)->get();

        return response()->json($perms);
    }

    




    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
