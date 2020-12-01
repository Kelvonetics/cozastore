@extends('layouts.app')

@section('content')





<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title"><i class="fa fa-upload" ></i> Company Details </h4>   

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="invoice-title">
                                            <h4 class="pull-right font-16"><strong> S/N # {{$comp->id}} </strong></h4>
                                            <h3 class="m-t-0">
                                                <img src="{{asset('assets/images/dpr_logo.png')}}" alt="logo" height="32"/>
                                            </h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-8 text-left">
                                                <address> <strong>Company</strong><br> {{$comp->company_name}} </address> 
                                            </div>
                                            <div class="col-2 text-left">
                                                <address> <strong>Prefix </strong><br> {{$comp->Company}} </address> 
                                            </div>
                                            <div class="col-2 text-right">
                                                <address> <strong> Operation </strong><br> {{$comp->Operation}} </address>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3 text-left">
                                                <address>
                                                    <strong> Qualification </strong> <br> @if($comp->qualifications) {{$comp->qualifications->Qualification}} @endif 
                                                </address>
                                            </div>
                                            <div class="col-7 text-left">
                                                <address> <strong> Address </strong><br>  {{$comp->Address}} </address>
                                            </div>
                                            <div class="col-2 text-right">
                                                <address> <strong> State</strong><br>@if($comp->state) {{$comp->state->state_name}} @endif 
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                

                                <!-- Operation License -->
                                <div class="row" style="border:thin dotted #ccc">
                                    <div class="col-12">
                                        <div class="panel panel-default">
                                            <div class="p-2">
                                                <h3 class="panel-title font-20">

                                                
                                                </h3>

                                            </div>

                                            
                                        </div>

                                    </div>
                                </div> <!-- end row -->







                                <div class="d-print-none mo-mt-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <a href="#" class="btn btn-primary pull-left" title="View {{$comp->Company}} Details" onclick="showmodal('comp_leases')" style="font-size:12px">  <i class="fa fa-eye" data-toggle="tooltip" data-original-title="View {{$comp->Company}} Operation Licemses Here"> 
                                            View Licemses </i> 
                                        </a>
                                        </div>

                                        <div class="col-md-4"> <center>
                                        <a href="#" class="btn btn-info" title="View {{$comp->Company}} Details" onclick="showmodal('comp_fields')" style="font-size:12px">  <i class="fa fa-eye" data-toggle="tooltip" data-original-title="View {{$comp->Company}} Fields Here"> 
                                        View Fields </i> 
                                        </a></center>
                                        </div>

                                        <div class="col-md-4">
                                        <a href="#" class="btn btn-primary pull-right" title="View {{$comp->Company}} Details" onclick="showmodal('comp_facilities')" style="font-size:12px">  <i class="fa fa-eye" data-toggle="tooltip" data-original-title="View {{$comp->Company}} Facilities Here"> 
                                            View Facilities </i> 
                                        </a>
                                        </div>
                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
        </div>
    </div>

</div>




  <!-- Add Company License Lease modal -->
<div id="comp_leases" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header view_bg">
            <h4 class="modal-title"> <span style="font-size: 14px"> {{$comp->company_name}} </span> Licenses  <span style="margin-left: 150px"> Total Liceses : {{$comp_leases->count()}} </span> </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">          
      
            <div class="table-responsive">
                <table width="100%" class="table table-striped" id="datatable">
                    <thead> 
                        <tr>
                            <td class="text-left" width="60%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Company</strong></td>
                            <td class="text-center" width="20%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Lease Name</strong></td>
                            <td class="text-right" width="20%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Terrain</strong></td>
                        </tr>  
                    </thead>
                    <tbody id="first_row">
                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                        @if($comp_leases)
                            @foreach($comp_leases as $comp_lease)
                            <tr>
                                <td class="text-left" style="font-size:12px;padding: 2px">{{$comp->company_name}}</td>
                                <td class="text-center" style="font-size:12px;padding: 2px">@if($comp_lease){{$comp_lease->Lease_name}} @endif</td>
                                <td class="text-right" style="font-size:12px;padding: 2px">
                                    @if($comp_lease->terrain) {{$comp_lease->terrain->terrain_name}} @endif
                                </td>
                            </tr>                                                              
                            @endforeach
                        @endif
                    </tbody> 
                </table>
            </div>
          
          </div>
        </div>
     </div>  
</div>




  <!-- Add Company Fields modal -->
<div id="comp_fields" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header view_bg">
            <h4 class="modal-title"> <span style="font-size: 14px"> {{$comp->Company}} </span> Fields <span style="margin-left: 150px"> Total Fields : {{$comp_fields->count()}} </span> </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body">          
      
            <div class="table-responsive">
                <table width="100%" class="table table-striped" id="fields_Dtable">
                    <thead> 
                        <tr>
                            <td class="text-left" width="20%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Company</strong></td>
                            <td class="text-center" width="20%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Lease Name</strong></td>
                            <td class="text-center" width="30%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Field Name</strong></td>
                            <td class="text-right" width="30%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Field Type</strong></td>
                        </tr>  
                    </thead>
                    <tbody id="first_row">
                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                        @if($comp_fields)
                            @foreach($comp_fields as $comp_field)
                            <tr>
                                <td class="text-left" style="font-size:12px;padding: 2px">{{$comp->Company}}</td>
                                <td class="text-center" style="font-size:12px;padding: 2px">@if($comp_field){{$comp_field->license->Lease_name}} @endif</td>
                                <td class="text-center" style="font-size:12px;padding: 2px">@if($comp_field){{$comp_field->Field_name}} @endif</td>
                                <td class="text-right" style="font-size:12px;padding: 2px">
                                    @if($comp_field->field_type){{$comp_field->field_type->Field_type_name}} @endif
                                </td>
                            </tr>                                                              
                            @endforeach
                        @endif
                    </tbody>    

                </table>
            </div>
          
          </div>
        </div>
     </div>  
</div>




  <!-- Add Company Facilities modal -->
<div id="comp_facilities" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header view_bg">
            <h4 class="modal-title"> <span style="font-size: 14px"> {{$comp->Company}} </span> Facilities <span style="margin-left: 150px"> Total Facilities : {{$comp_facs->count()}} </span> </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">          
      
            <div class="table-responsive">
                <table width="100%" class="table table-striped" id="facilities_Dtable">
                    <thead> 
                        <tr>
                            <td class="text-left" width="10%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Company</strong></td>
                            <td class="text-left" width="40%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Facility Name</strong></td>
                            <td class="text-left" width="20%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Facility Type</strong>
                            </td>
                            <td class="text-left" width="15%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>Field</strong>
                            </td>
                            <td class="text-right" width="15%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                <strong>LGA</strong>
                            </td>
                        </tr>  
                    </thead>
                    <tbody id="first_row">
                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                        @if($comp_facs)
                            @foreach($comp_facs as $comp_fac)
                            <tr>
                                <td class="text-left" style="font-size:12px;padding: 2px">{{$comp->Company}}</td>
                                <td class="text-left" style="font-size:12px;padding: 2px"> {{$comp_fac->Facility_name}} </td>
                                <td class="text-left" style="font-size:12px;padding: 2px">@if($comp_fac->facility_type){{$comp_fac->facility_type->facility_type_name}} @endif </td>
                                <td class="text-left" style="font-size:12px;padding: 2px"> @if($comp_fac->field) {{$comp_fac->field->Field_name}} @endif  </td>
                                <td class="text-right" style="font-size:12px;padding: 2px"> @if($comp_fac->lga) {{$comp_fac->lga->LGA_name}} @endif  </td>
                            </tr>                                                              
                            @endforeach
                        @endif
                    </tbody> 
                </table>
            </div>
          
          </div>
        </div>
     </div>  
</div>

















@endsection

@section('script')


<!-- AJAX TO POPULATE TABLES AND PAGINATION -->
<script type="text/javascript">
    $(function()
    {     
        //DATA TABLES
        $('#fields_Dtable').DataTable(); 
        $('#facilities_Dtable').DataTable();  

    });

    function showmodal(modalid)
    {
        $('#'+modalid).modal('show');
    }
</script>

@endsection


