
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title"><i class="fa fa-upload" ></i> Incident Classification Details  <img src="{{asset('assets/images/dpr_logo.png')}}" class="pull-right" alt="logo" height="32"/>  </h4>   

                <!-- Operation License -->
                <div class="table-responsive" style="padding: 0px">
                    <table width="100%" class="table table-striped" id="in_class_Dtable">
                        <thead> 
                            <tr>
                                <td class="text-left" width="20%" style="font-size:12px;padding: 4px; background-color: #ccc"> <strong>ID</strong> </td>
                                <td class="text-left" width="30%" style="font-size:12px;padding: 4px; background-color: #ccc"> <strong>Facility</strong> </td>
                                <td class="text-right" width="50%" style="font-size:12px;padding: 4px; background-color: #ccc"> <strong>Company</strong> </td>
                            </tr>  
                        </thead>
                        <tbody id="first_row">
                        @if($ACC_CLASS)
                            @foreach($ACC_CLASS as $ACC_CLASSs)
                                <tr>
                                    <td class="text-left" style="font-size:12px;padding: 2px"> {{$ACC_CLASSs->Incident_id}} </td>
                                    <td class="text-left" style="font-size:12px;padding: 2px">@if($ACC_CLASSs->facility) {{$ACC_CLASSs->facility->Facility_name}} @endif</td>
                                    <td class="text-right" style="font-size:12px;padding: 2px">@if($ACC_CLASSs->company) {{$ACC_CLASSs->company->company_name}} @endif</td>
                                </tr> 
                            @endforeach
                        @endif   
                        </tbody> 
                    </table>
                </div>
                <!-- end row -->

            </div>
        </div>
    </div>

</div>







<!-- AJAX TO POPULATE TABLES AND PAGINATION -->
<script type="text/javascript">
    $(function()
    {     
        //DATA TABLES
        $('#in_class_Dtable').DataTable();   

    });
</script>
