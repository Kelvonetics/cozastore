@extends('layouts.app')

@section('content')










   <!-- Shoping Cart -->
    <form id="perForm" action="{{url('cart/addUsers')}}" method="POST">
        {{ csrf_field() }}
        <div class="container margin_tb" style="padding: 0px;">
            <div class="row" style="">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart" id="personal_info">                       
                        
                            <div class="form-group row head-row" style="">                                
                                <h3 class="col-md-12 form-control-label"> Personal Info </h3>                        
                           </div>

                            <div class="form-group row">                                
                                <label class="col-md-2 form-control-label"> Social title </label>                            
                                <div class="col-md-10">
                                    <table>
                                        <tr>
                                            <td style="width: 5%"> Mr. </td>
                                            <td style="width: 5%"> <input class="form-control-label" name="id_gender" type="radio" value="1">  </td>
                                            <td style="width: 5%"> Mrs. </td>
                                            <td style="width: 5%"> <input class="form-control-label" name="id_gender" type="radio" value="2">  </td>
                                            <td style="width: 75%"></td>
                                        </tr>
                                    </table>
                                </div>
                          </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"> Full name </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Firstname Lastname" name="name" id="name" required>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label"> Email </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label"> Password </label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                    <input type="hidden" class="form-control" placeholder="Role" name="role" id="role" value="2">
                                </div>
                            </div> 

                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="button" class="saveBtn pull-right" name="" id="save_pi" required>Next</button>
                                </div>
                            </div>
                        
                        </div>


                        <div class="wrap-table-shopping-cart" id="addresses">  
                            <div class="form-group row head-row" style="">                                
                                <h3 class="col-md-12 form-control-label"> Addresses </h3>                        
                            </div>                           

                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label"> Phone </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone">
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label"> Address </label>
                                <div class="col-sm-10">
                                    <textarea rows="2" class="form-control" placeholder="Address" name="address" id="address" required></textarea>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label"> City </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Your City" name="city" id="city" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="state" class="col-sm-2 col-form-label"> State </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Your State" name="state" id="state" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-sm-2 col-form-label"> Country </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Your Country" name="country" id="country" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="button" class="saveBtn pull-right" name="" id="save_ad" required>Next</button>
                                </div>
                            </div>
                        </div>


                        <div class="wrap-table-shopping-cart" id="shippment">
                            <div class="form-group row head-row" style="">                                
                                <h3 class="col-md-12 form-control-label"> Shipment </h3>                        
                            </div>                           

                            <div class="form-group row">
                                <label for="shipping_fee" class="col-sm-2 col-form-label"> Shipping Fee </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Shipping Fee" name="shipping_fee" id="shipping_fee">
                                </div>
                            </div> 

                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="button" class="saveBtn pull-right" name="" id="save_sh" required>Next</button>
                                </div>
                            </div>
                        </div>


                        <div class="wrap-table-shopping-cart" id="payment">  
                            <div class="form-group row head-row" style="">                                
                                <h3 class="col-md-12 form-control-label"> Payment </h3>                        
                            </div>                           

                            <div class="form-group row">
                                <label for="shipping_fee" class="col-sm-2 col-form-label"> Payment Type </label>
                                
                            </div> 

                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="saveBtn pull-right" name="" id="save_pa" required>Save</button>
                                </div>
                            </div>
                        </div>


                        <div class="wrap-table-shopping-cart" id="succ">  
                            <div class="form-group row head-row" style="">                                
                                <h3 class="col-md-12 form-control-label"> Success </h3>                        
                            </div>                           

                            <div class="form-group row">
                                <div for="" class="col-sm-12 alert-success"> Your Details Was Saved Successfully. </div>
                                
                            </div> 
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
                                    
                                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    Apply coupon
                                </div>
                            </div>

                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                Update Cart
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        

















<!-- Edit Cart modal -->
<div id="edit_cate" class="modal fade modal-mt"" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header edit_bg">
            <h4 class="modal-title">Edit Cate</h4>
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
                // appendTable(data.message,tableId);
                // $('#'+modalid).modal('hide');
                // toastr.info(data.info, {timeOut:10000});
                // return;

                alert(data.info);
            }
            else
            {
                alert(data.error);
            }
           
            //return toastr.error(data.info, {timeOut:10000});
            
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
        // Category Details
        $("#categoryForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('categoryForm', "{{url('categories/addCategories')}}", 'category_table', 'progress', 'add_category');
        });

        // Personal Details
        $("#perForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('perForm', "{{url('cart/addUsers')}}", 'cart_table', 'progress', 'personal_info');
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


    $(function()
    {
        $('#addresses').hide();     $('#shippment').hide();     $('#payment').hide();     $('#succ').hide();

        $('#save_pi').click(function()
        {
            $('#personal_info').hide();     $('#shippment').hide();     $('#payment').hide();
            $('#addresses').show();
        });
        $('#save_ad').click(function()
        {
            $('#personal_info').hide();     $('#addresses').hide();     $('#payment').hide();
            $('#shippment').show();
        });
        $('#save_sh').click(function()
        {
            $('#personal_info').hide();     $('#shippment').hide();     $('#addresses').hide();
            $('#payment').show();
        });
        $('#save_pa').click(function()
        {
            $('#personal_info').hide();    $('#addresses').hide();     $('#shippment').hide();     $('#payment').hide();
            $('#succ').show();
        });
    });
</script>









@endsection


