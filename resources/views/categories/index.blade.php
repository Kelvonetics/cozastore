@extends('layouts.app')

@section('content')









<div class="container margin_tb" style="">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#categorys">Add Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#sub_category">Sub Categories </a>
      </li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content" style="">
      <div class="tab-pane container no_padding active" id="categorys">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Categories
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Categories Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
                <table class="table table-striped table-hover mb-0" id="category_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Position</th>
                        <th>Display</th>
                        <th style=""> 
                            <a onclick="showmodal('add_category')" style="" class="btn_add btn-sm pull-right" title="Add New Categories Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                        @if($category)
                            @foreach($category as $categories)
                                <tr>   
                                    <th class="th_fsize">{{$categories->id}}</th>
                                    <th class="th_fsize">{{$categories->category_name}} </th>
                                    <th class="th_fsize">{{$categories->description}}</th>
                                    <th class="th_fsize">{{$categories->position}}</th>
                                    <th class="th_fsize">@if($categories->displays) {{$categories->displays->value}} @endif</th>
                                    <th>
                                        <a href="#" class="pull-right " title="View {{$categories->category_name}} Details" style="font-size:12px"> 
                                            <i class="fa fa-eye text-inverse m-r-10"></i> 
                                        </a>
                                        <a href="#" class="pull-right" title="Edit {{$categories->category_name}} Details" onclick="load_category({{$categories->id}})" style="font-size:12px"> 
                                            <i class="fa fa-pencil text-inverse m-r-10"></i> 
                                        </a>
                                    </th>   
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
        </div>
      </div>

      <div class="tab-pane container fade no_padding" id="sub_category">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Sub Categories
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Sub Categories Photo Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
            <table class="table table-striped table-hover mb-0" id="sub_cat_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th style=""> 
                            <a onclick="showmodal('add_sub_category')" style="" class="btn_add btn-sm pull-right" title="Add New Sub Categories Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
        </div>
      </div>

    </div>      
</div>














<!-- Add Category modal -->
<div id="add_category" class="modal fade modal-mt" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Category </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body">
          <form id="categoryForm" action="{{url('categories/addCategories')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="category_name" class="col-form-label"> Category Name </label>
                    <input type="text" class="form-control" placeholder="Category Name" name="category_name" id="category_name" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="description" class="col-form-label"> Description </label>
                    <textarea rows="2" class="form-control" placeholder="Category Description" name="description" id="description" required></textarea>
                </div>
            </div>  

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="position" class="col-form-label"> Position </label>
                    <input type="text" class="form-control" placeholder="Category Position" name="position" id="position" required>
                </div>

                <div class="col-sm-6">
                <label for="display_id" class="col-form-label"> Display </label>
                    <select class="form-control" name="display_id" id="display_id" required>
                        <option value=""> Select Display Status </option>
                        @if($display)
                            @foreach($display as $display)
                                <option value="{{$display->id}}"> {{$display->value}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
           

          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Category</button>
          </div>
          </form>
        </div>
    </div>
    </div>  
</div>

<!-- Edit Category modal -->
<div id="edit_cate" class="modal fade modal-mt"" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header edit_bg">
            <h4 class="modal-title">Edit Category</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div id="editcate"></div>
          </div>
    </div>
    </div>  
</div>














@endsection

@section('script')

<script type="text/javascript">
    
    $(function()
    {        
            
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
    if(tableId == 'category_table')
    {
        $('#'+tableId).prepend('<tr> <td> '+data.id+' </td>  <td> '+data.category+' </td>   <td> '+data.description+' </td>   <td> '+data.position+' </td>   <td> '+data.display+' </td>   <td>  <a  onclick="load_category('+data.id+')" style="font-size:12px">  <i class="fa fa-pencil text-inverse m-r-10" data-toggle="tooltip" data-original-title="Edit Category Here"></i> </a>  <a onclick="view_category('+data.id+')" style="font-size:12px"> <i class="fa fa-eye text-inverse m-r-10" data-toggle="tooltip" data-original-title="View Category Details Here"></i>   </a></td>   </tr>');
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
        // Product Details
        $("#categoryForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('categoryForm', "{{url('categories/addCategories')}}", 'category_table', 'progress', 'add_category');
        });


    });
</script>



<script type="text/javascript"> //FUNCTIONS TO LOAD EDIT MODALS

    function load_category(id)
    {   
        $('#editcate').load("{{url('categories')}}/modals/editCategories?id="+id);
        $('#edit_cate').modal('show');
    }
</script>





<script type="text/javascript">
    $(function()
    {
        $('#category_table').DataTable();
    });
</script>









@endsection


