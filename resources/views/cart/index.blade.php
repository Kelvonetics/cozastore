@extends('layouts.app')

@section('content')









   <!-- Shoping Cart -->
    
        <div class="container margin_tb" style="padding: 0px; margin-top: 90px">
            <div class="row" style="">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Photo</th>
                                    <th class="column-2">Product</th>
                                    <th class="column-3">Unit Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th class="" style="width: 1%"></th>
                                </tr>
                               
                                    @if($cart)
                                        @foreach($cart as $carts)
                                            <tr class="table_row">
                                                <td class="column-1">
                                                    <div class="how-itemcart1">  
                                                        <?php 
                                                            $qty = $carts->quantity;  $price = $carts->price;      $tot = ($qty * $price); 
                                                            $img = $carts->product->product_image->image_1;
                                                        ?>
                                                        <img src="{{URL::asset('assets/images/Products/'.$img.'/'.$img)}}" alt="IMG">
                                                    </div>
                                                </td>
                                                <td class="column-2">{{$carts->product->product_name}}</td>
                                                <td class="column-3"><span style="font-size: 18px">&#8358; </span> <?= number_format($carts->product->unit_price, 2) ?></td>
                                                <td class="column-4">
                                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m minus" id="{{$carts->id}}"  onclick="showmodal('add_qty')" onmouseenter="minusQtyId({{$carts->id}})">
                                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                                        </div>

                                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" id="qty{{$carts->id}}" value="{{$carts->quantity}}">

                                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m plus" id="{{$carts->id}}" onclick="showmodal('add_qty')" onmouseenter="getQtyId({{$carts->id}})">
                                                            <i class="fs-16 zmdi zmdi-plus"> </i>
                                                        </div>
                                                    </div>
                                                </td>
                                                    <?php  $qtys = $carts->quantity; $prices = $carts->product->unit_price;  ?>
                                                    <?php $tots = ($qtys * $prices); ?>
                                                <td class="column-5"><span style="font-size: 18px">&#8358; </span> <?= number_format($tots, 2) ?>   <input class="form-control all_amt" type="hidden" name="tot_amt" id="tot_amt" value="{{$tots}}"> </td>
                                                <td class="">  
                                                    <button type="submit" class="btn btn-sm" name="remove" id="" data-toggle="tooltip" title="Remove {{$carts->product->product_name}} From Your Cart" style="padding:5px; margin-right: 5px" onclick="showmodal('del_item')" onmouseenter="getId({{$carts->id}})">  <i class="fa fa-remove text-inverse m-r-10" style="color:red"></i>    </button> 
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                            </table> <br>
                            {{-- {{$cart->render()}} --}}
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
                                    
                                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5"> Apply coupon </div>
                            </div>

                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10"> Update Cart </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30"> Cart Totals </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2"> Subtotal: </span>
                            </div>

                            <div class="size-209">
                                <span style="font-size: 18px">&#8358; </span> <span class="mtext-110 cl2 total_price" style="color: #E52B50"> </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
                                <span class="stext-110 cl2"> Shipping: </span>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    There are no shipping methods available. Please double check your address, or contact us if you need any help.
                                </p>
                                
                                <div class="p-t-15">
                                    <span class="stext-112 cl8"> Calculate Shipping </span>

                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <select class="js-select2" name="time">
                                            <option>Select a country...</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                    <div class="bor8 bg0 m-b-12">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
                                    </div>

                                    <div class="bor8 bg0 m-b-22">
                                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                                    </div>
                                    
                                    <div class="flex-w">
                                        <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer"> Update Totals </div>
                                    </div>
                                        
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2"> Total: </span>
                            </div>

                            <div class="size-209 p-t-1"> <span style="font-size: 18px">&#8358; </span> <span class="mtext-110 cl2 total_price" style="color: #E52B50">  </span>
                            </div>
                        </div>

                        <a href="{{url('cart/checkout')}}" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer"> Proceed to Checkout </a>
                    </div>
                </div>
            </div>
        </div>
        








<!-- Increase Item Quantity In Cart modal -->
<div id="add_qty" class="modal fade margin_tb" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
          <form id="plusminusForm" action="{{url('cart/updateItemQtyInCart')}}" method="POST">
            {{ csrf_field() }}
          

                 <label for="" class="col-sm-12 col-form-label"> Change Item Quantity In Cart ? </label>
                 <input type="hidden" class="form-control" name="upd_qty" id="upd_qty" value="">
                 <input type="hidden" class="form-control" name="id" id="id" value="">


              <div class="modal-footer" id="add_footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="submit" name="" id="" class="btn btn-success"> <i class="fa fa-plus"></i> Yes</button>
              </div>
          </form>
        </div>
    </div>
    </div>  
</div>








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
                appendTable(data.message,tableId);
                $('#'+modalid).modal('hide');
                toastr.success(data.info, {timeOut:10000});
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

    

    function getQtyId(id)
    {
        $('#id').val(id);   
    }

    function minusQtyId(id)
    {
        $('#id').val(id);   
    }
</script>




<script type="text/javascript">
    $(function()
    {
        var all_amt = 0;
        $('.all_amt').each(function()            
        {
            all_amt += parseFloat($(this).val());
        });
        $(".total_price").html(all_amt.toFixed(2));
        //console.log(total_amt.toFixed(2));

        //script to calculate total Amount Price
        $('.plus').click(function()
        {
            var qid = $(this).attr('id');
            var val = $("#qty"+qid).val();
            $('#upd_qty').val(val);
            //alert(val);

        });

        //script to calculate total Amount Price
        $('.minus').click(function()
        {
            var qid = $(this).attr('id');
            var val = $("#qty"+qid).val();
            $('#upd_qty').val(val);
            //alert(val);

        });
    });

</script>


            <!-- var all_amt = 0;
            $('.all_amt').each(function()            
            {
                all_amt += parseFloat($(this).val());
            });
            $(".total_price").html(all_amt.toFixed(2));
            alert(all_amt); -->



@endsection


