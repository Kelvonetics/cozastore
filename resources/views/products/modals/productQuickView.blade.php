<!-- CART FORM -->
<form id="cartsForm" action="{{url('cart/addProductToCart')}}" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1" data-dismiss="modal">
                <img src="{{URL::asset('assets/images/icons/icon-close.png')}}" alt="CLOSE">
            </button>

            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    
                    <div id="demo" class="carousel slide" data-ride="carousel">

                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            @if($prod_infos->image_2) <li data-target="#demo" data-slide-to="1"></li> @endif
                            @if($prod_infos->image_3) <li data-target="#demo" data-slide-to="2"></li> @endif
                            @if($prod_infos->image_4) <li data-target="#demo" data-slide-to="3"></li> @endif
                            @if($prod_infos->image_5) <li data-target="#demo" data-slide-to="4"></li> @endif
                            @if($prod_infos->image_6) <li data-target="#demo" data-slide-to="5"></li> @endif
                            @if($prod_infos->image_7) <li data-target="#demo" data-slide-to="6"></li> @endif
                            @if($prod_infos->image_8) <li data-target="#demo" data-slide-to="7"></li> @endif
                            @if($prod_infos->image_9) <li data-target="#demo" data-slide-to="8"></li> @endif
                            @if($prod_infos->image_10) <li data-target="#demo" data-slide-to="9"></li> @endif
                          </ul>
                          

                          <!-- The slideshow -->
                          <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_1.'/'.$prod_infos->image_1)}}" class="slider-mm" alt="">
                                </div>

                                @if($prod_infos->image_2)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_2.'/'.$prod_infos->image_2)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_3)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_3.'/'.$prod_infos->image_3)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_4)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_4.'/'.$prod_infos->image_4)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_5)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_5.'/'.$prod_infos->image_5)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_6)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_6.'/'.$prod_infos->image_6)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_7)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_7.'/'.$prod_infos->image_7)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_8)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_8.'/'.$prod_infos->image_8)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_9)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_9.'/'.$prod_infos->image_9)}}" class="slider-mm" alt="">
                                    </div>
                                @endif

                                @if($prod_infos->image_10)
                                    <div class="carousel-item">
                                      <img src="{{URL::asset('assets/images/Products/'.$prod_infos->image_10.'/'.$prod_infos->image_10)}}" class="slider-mm" alt="">
                                    </div>
                                @endif
                          </div>

                          <!-- Left and right controls -->
                          <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>

                        </div>

                </div>
                
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$prod_infos->product->title}}
                        </h4>

                        <span class="mtext-106 cl2" style="color: #E52B50">
                            <span style="font-size: 18px">&#8358; </span> <?= number_format($prod_infos->product->unit_price, 2) ?> 
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{$prod_infos->product->description}}
                        </p>
                        
                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="form-control js-select2" name="feature" id="feature">
                                            <option value="">Pick A Size</option>
                                            @if($sizes)
                                                @foreach($sizes as $sizes)
                                                    <option value="{{$sizes->value_1}}"> {{$sizes->value_1}} </option>                           
                                                @endforeach
                                            @else
                                                <option value="10">10</option>
                                            @endif
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="form-control js-select2" name="color" id="color">
                                            <option value="">Pick A Color</option>
                                            @if($colors)
                                                @foreach($colors as $colors)
                                                    <option value="{{$colors->color_name}}"> {{$colors->color_name}} </option>                           
                                                @endforeach
                                            @else
                                                <option value="White">White</option>
                                            @endif
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Qty
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <input type="number" class="form-control" name="quantity" id="quantity" value="1">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <!-- Product Quantity -->
                                    


                                    
                                        {{ csrf_field() }}
                                        <input type="hidden" class="form-control" name="product_id" id="product_id" value="{{$prod_infos->product_id}}">
                                        <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{\Auth::user()->id}}">
                                        
                                        <input type="hidden" class="form-control" name="order_id" id="order_id" value="100">
                                        <input type="hidden" class="form-control" name="stage" id="stage" value="0">

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" type="submit">
                                        Add to cart
                                    </button>
                                </div>
                            </div>  
                        </div>

                        <!--  -->
                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                            <div class="flex-m bor9 p-r-10 m-r-11">
                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a>
                            </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="{{url('cart')}}" class="btn btn-sm pad-btn" style="" id="reviewBtn" target="_blank"> Proceed To Checkout </a>
                        </div>
                    </div>
                </div>

                



            </div>

        </div>
        
    </div>
 </form>


    <form id="rateForm" action="{{url('cart/rateProduct')}}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 col-lg-4 p-b-30">
                {{ csrf_field() }}

                <div class="form-group row">
                    <div class="col-sm-12">
                        <h1> Rate This Product </h1>
                        <fieldset class="rating">
                            <input type="radio" class="rate" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" class="rate" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" class="rate" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" class="rate" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" class="rate" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" class="rate" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" class="rate" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" class="rate" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" class="rate" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" class="rate" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-12 col-form-label"> Title </label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Your Title" name="title" id="title" required="">
                        <input type="hidden" class="form-control" name="product_id" id="product_id" value="{{$prod_infos->product_id}}">
                        <input type="hidden" class="form-control" name="ratings" id="ratings" value="">
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="review" class="col-sm-12 col-form-label"> Feedback </label>
                    <div class="col-sm-12">
                        <textarea rows="2" class="form-control" placeholder="Your Feedback" name="review" id="review" required=""></textarea>
                    </div>
                </div>  

                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-sm pull-right pad-btn"> Post Feedback</button>
                    </div>
                </div>               
            </div>
            <?php $review = \App\FeedbackAndReview::where('product_id', $prod_infos->product_id)->orderBy('id', 'desc')->paginate(3); ?>
            <div class="col-md-8 col-lg-8 p-b-30">
                
            <table class="table mb-0" id="">
                <thead>
                <tr style="">
                    <th style="width: 25%">Review </th>
                    <th style="width: 75%"> </th>
                </tr>
                </thead>
                <tbody>
                    @if($review)
                        @foreach($review as $reviews)
                            <tr>   
                                <th style="font-size:12px; color: #87A96B">{{$reviews->user->name}} </th>
                                <th style="font-size:12px; color: #87A96B">{{$reviews->title}} </th> 
                            </tr>
                            <tr>   
                                <th style="font-size:12px">{{$reviews->created_at}} </th>
                                <th style="font-size:12px">{{$reviews->review}}</th>  
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{$review->render()}}                    
            </div>
        </div>
 </form>


<script type="text/javascript"> //FUNCTIONS TO LOAD EDIT MODALS   
  
    //function to process form data
    function processForm(formid, route, modalid)
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
                    $('#'+modalid).modal('hide');
                    toastr.success(data.info, {timeOut:15000});
                    return;
                    //alert(data.info);
                }
                //return alert(data.info);
                return toastr.error(data.info, {timeOut:15000});

            }
        })

    }



    $(function()
    { 

        $('.rate').on('click', function()
        {
            $('#ratings').val($(this).val());            //alert($(this).val());
        });

        //GARS Safety Accident
        $("#cartsForm").on('submit', function(e)
        { 
            e.preventDefault();
            processForm('cartsForm', "{{url('cart/addProductToCart')}}", 'quick_info');
        }); 

        //GARS Safety Accident
        $("#rateForm").on('submit', function(e)
        { 
            e.preventDefault();
            processForm('rateForm', "{{url('cart/rateProduct')}}", 'quick_infos');
        }); 
    });



</script>