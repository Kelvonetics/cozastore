


<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title"><i class="fa fa-upload" ></i> Facility Details </h4>   

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="invoice-title">
                                            <h4 class="pull-right font-16"><strong> S/N # {{$FACILITY->id}} </strong></h4>
                                            <h3 class="m-t-0">
                                                <img src="{{asset('assets/images/dpr_logo.png')}}" alt="logo" height="32"/>
                                            </h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-7 text-left">
                                                <address> <strong>Facility</strong><br> {{$FACILITY->Facility_name}} </address> 
                                            </div>
                                            <div class="col-5 text-right">
                                                <address> <strong>Facility Type</strong><br>@if($FACILITY->facility_type) {{$FACILITY->facility_type->facility_type_name}} @endif</address> 
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                

                                <!-- Operation License -->
                                <div class="row" style="border:thin dotted #ccc">
                                    <div class="col-12">
                                        <div class="panel panel-default">
                                            <div class="p-2">
                                                <h3 class="panel-title font-20">  Facility Details  </h3>

                                                <div class="table-responsive">
                                                    <table width="100%" class="table table-striped" id="datatable">
                                                        <thead> 
                                                            <tr>
                                                                <td class="text-left" width="50%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                                                    <strong>Field</strong>
                                                                </td>
                                                                <td class="text-right" width="50%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                                                    <strong>Local Govt Area</strong>
                                                                </td>
                                                            </tr>  
                                                        </thead>
                                                        <tbody id="first_row">
                                                            <tr>
                                                                <td class="text-left" style="font-size:12px;padding: 2px">@if($FACILITY->field) {{$FACILITY->field->Field_name}} @endif</td>
                                                                <td class="text-right" style="font-size:12px;padding: 2px">@if($FACILITY->lga) {{$FACILITY->lga->LGA_name}} @endif</td>
                                                            </tr>    
                                                        </tbody> 
                                                    </table>
                                                </div>

                                                <div class="table-responsive">
                                                    <table width="100%" class="table table-striped" id="datatable">
                                                        <thead> 
                                                            <tr>
                                                                <td class="text-left" width="70%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                                                    <strong>Company</strong>
                                                                </td>
                                                                <td class="text-right" width="30%" style="font-size:12px;padding: 4px; background-color: #ccc">
                                                                    <strong>Operating License</strong>
                                                                </td>
                                                            </tr>  
                                                        </thead>
                                                        <tbody id="first_row">
                                                            <tr>
                                                                <td class="text-left" style="font-size:12px;padding: 2px">@if($FACILITY->company) {{$FACILITY->company->company_name}} @endif</td>
                                                                <td class="text-right" style="font-size:12px;padding: 2px">@if($FIELD->license) {{$FIELD->license->Lease_name}} @endif</td>
                                                            </tr> 
                                                        </tbody> 
                                                    </table>
                                                </div>

                                            </div>

                                            
                                        </div>

                                    </div>
                                </div> <!-- end row -->





                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>
        </div>
    </div>

</div>





