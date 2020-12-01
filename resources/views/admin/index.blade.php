@extends('layouts.app')

@section('content')





<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <!-- Notification Panel --> 
                <h4 class="mt-0 header-title"><i class="fa fa-briefcase" ></i> Admin Setup </h4>                
                <!-- <p class="text-muted m-b-30 font-14">Configure all project settings here.</p> -->

                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist"> 
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Categories" role="tab"> Categories</a>
                    </li>   

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Sub_Categories" role="tab"> Sub Categories</a>
                    </li>         
                
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="Categories" role="tabpanel">
                        <p class="font-14 mb-0">
                            <div class="row" id="">                       

                            </div> <!-- end row -->
                        </p>
                    </div>

                    <div class="tab-pane p-3" id="Sub_Categories" role="tabpanel">
                        <p class="font-14 mb-0">
                            <div class="row" id="">                       

                            </div> <!-- end row -->
                        </p>
                    </div>

                    
                    
                </div>

            </div>
        </div>
    </div>

</div>




















  <!-- Add Company modal -->
<div id="add_comp" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title">Add Company </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
          <form id="compForm" action="{{url('admin/addCompany')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="company_name" class="col-sm-1 col-form-label"> Company </label>
                <div class="col-sm-11">
                    <textarea rows="2" class="form-control" placeholder="Company" name="company_name" id="company_name" required></textarea>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Company" class="col-sm-1 col-form-label"> Prefix </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Company Prefix" name="Company" id="Company" required>
                </div>

                <label for="Qualification" class="col-sm-1 col-form-label"> Qualification </label>
                <div class="col-sm-5">
                    <select class="form-control" name="Qualification" id="Qualification" required>
                        <option value=""> Select Qualification </option>
                        @if($qualification)
                            @foreach($qualification as $qualification)
                                <option value="{{$qualification->id}}"> {{$qualification->Qualification}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Operation" class="col-sm-1 col-form-label"> Operation </label>
                <div class="col-sm-5">
                    <select class="form-control" name="Operation" id="Operation" required>
                        <option value=""> Select Operation </option>
                        <option value="Downstream"> Downstream </option>
                        <option value="Upstream"> Upstream </option>
                    </select>
                </div>

                <label for="State_Id" class="col-sm-1 col-form-label"> State </label>
                <div class="col-sm-5">
                    <select class="form-control" name="State_Id" id="State_Id" required>
                        <option value=""> Select State </option>
                        @if($state)
                            @foreach($state as $state)
                                <option value="{{$state->id}}"> {{$state->state_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Address" class="col-sm-1 col-form-label"> Address </label>
                <div class="col-sm-11">
                    <textarea rows="2" class="form-control" placeholder="Address" name="Address" id="Address" required></textarea>
                </div>
            </div> 
      
            

          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Company</button>
          </div>
          </form>
        </div>
    </div>
    </div>  
</div>

<!-- Edit Company modal -->
<div id="edit_comp" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header edit_bg">
            <h4 class="modal-title">Edit Company</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div id="editcomp"></div>
          </div>
    </div>
    </div>  
</div>














@endsection

@section('script')

<script type="text/javascript">
    
    $(function()
    {
      @if(session('info'))
          toastr.info("{{session('info')}}");
      @endif
           
            
        $('#start_dates').datepicker();
    });


    function showmodal(modalid)
    {
        $('#'+modalid).modal('show');
    }

</script>


<script>   // JAVASCRIPT AJAX FUNCTION

function appendTable(data, tableId)
{
    if(tableId == 'comp_table')
    {
        $('#'+tableId).prepend('<tr> <td> '+data.id+' </td>  <td> '+data.company_name+' </td>  <td> '+data.Company+' </td>  <td> '+data.Qualification+' </td>    <td> '+data.Operation+' </td>  <td> '+data.Address+' </td>  <td> '+data.State_Id+' </td>  <td>  <a  onclick="load_company('+data.id+')" style="font-size:12px">  <i class="fa fa-pencil text-inverse m-r-10" data-toggle="tooltip" data-original-title="Edit Company Here"></i> </a>  <a onclick="view_company('+data.id+')" style="font-size:12px"> <i class="fa fa-eye text-inverse m-r-10" data-toggle="tooltip" data-original-title="View Company Here"></i>   </a></td>   </tr>');
    }

    else if(tableId == 'cont_table')
    {
        $('#'+tableId).prepend('<tr> <td> '+data.id+' </td>  <td> '+data.contractor_name+' </td>   <td>  <a  onclick="load_contractor('+data.id+')" style="font-size:12px">  <i class="fa fa-pencil text-inverse m-r-10" data-toggle="tooltip" data-original-title="Edit Contractor Company Here"></i> </a>  <a onclick="view_contractor('+data.id+')" style="font-size:12px"> <i class="fa fa-eye text-inverse m-r-10" data-toggle="tooltip" data-original-title="View Contractor Company Here"></i>   </a></td>   </tr>');
    }

	
}

//function to process form data
function processForm(formid, route, tableId, progress, modalid)
{

   formdata= new FormData($('#'+formid)[0]);
   formdata.append('_token','{{csrf_token()}}');
  
    $.ajax(
    {
        // Your server script to process the upload
        url: route,
        type: 'POST',
        data: formdata,
        cache: false,
        contentType: false,
        processData: false,
        success:function(data, status, xhr)
        {
            if(data.status=='ok')
            {
                appendTable(data.message,tableId);
                $('#'+modalid).modal('hide');
                toastr.info(data.info, {timeOut:10000});
                return;
            }
           
            return toastr.error(data.info, {timeOut:10000});

        },
        // Custom XMLHttpRequest
        xhr: function() 
        {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) 
            {
                // For handling the progress of the upload
                myXhr.upload.addEventListener('progress', function(e) 
                {
                    if (e.lengthComputable) 
                    {
                        percent=Math.round((e.loaded/e.total)*100,2);
                        $('#'+progress).css('width',percent+'%');
                        $('#'+progress+'_text').text(percent+'%');
                    }
                }, false);
            }
            return myXhr;
        }
    })

}





    $(function()
    { 
        // Company Details
        $("#compForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('compForm', "{{url('admin/addCompany')}}", 'comp_table', 'progress', 'add_comp');
        });

        // Company Details
        $("#contForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('contForm', "{{url('admin/addContractorCompany')}}", 'cont_table', 'progress', 'add_cont');
        });


    });
</script>



<script type="text/javascript"> //FUNCTIONS TO LOAD EDIT MODALS

    function load_company(id)
    {   
        $('#editcomp').load("{{url('admin')}}/modals/editCompany?id="+id);
        $('#edit_comp').modal('show');
    }

    function load_contractor(id)
    {   
        $('#editcont').load("{{url('admin')}}/modals/editContractorCompany?id="+id);
        $('#edit_cont').modal('show');
    }


</script>




<script type="text/javascript">

    $(function()
    {        

      $('#year_mpm').datepicker(
      {
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
      });      
     

      $('#month').datepicker(
      {
        format: "M, yyyy",
        viewMode: "months", 
        minViewMode: "months"
      });

    })

</script>


<script type="text/javascript">
    $(function()
    {
        $('#cate_table').DataTable();
    });
</script>


@endsection


