<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mystore - A Shoppers Heaven</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{ asset('assets/images/icons/dr.png') }}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
<!--===============================================================================================-->

    <!-- DATATABLES -->
   <!--  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
<!--===============================================================================================-->

        <!-- DataTables -->
        <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/vendor/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/vendor/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

       <!-- toast plugins  -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" type="text/css" />



    <style type="text/css">
        *
        {
            font-size: 12px;  
            font-weight: lighter;
        }

        body, html
        {
            font-size: 12px; 
            font-weight: lighter;
        }
        .pad-btn
        {
            background-color: #202020; color: #fff;
            padding: 4px 10px;
            border-radius: 10px;
        }

        .add_bg
        {
             background-color: #318CE7; color: #ffffff; 
        }

        .edit_bg
        {
             background-color: #339966; color: #ffffff; 
        }

        .upload_bg
        {
             background-color: #0097a7; color: #ffffff; 
        }

        .view_bg
        {
             background-color: #202020; color: #ffffff; 
        }
        .extra_bg
        {
            background-color: #cccccc; color: #202020; 
        }
        .header_bg
        {
            background-color: ##FBCEB1; color: #202020;
        }

        .checkall
        {
            width: 1.6em; height: 1.5em; margin-top: 0px;
        }
        .round_btn
        {
            border-radius: 10px; padding: 3px 5px; font-size: 10px; color: #fff;
        }


        .excel-button
        {
            cursor: pointer; 
            color: #202020; 
            border:#ccc thin solid; 
            font-size:10px; 
            border-radius:4px; 
            margin-left: 10px;
            background-color: #B22222;
            color: #fff;
        }
        .bg-li
        {
            background-color:#36454F; color:#fff;
        }
        .pad
        {
            font-size: 10px;
            height: 1px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
        .add-btn
        {
            background-color: #fff; 
            color: #fff; 
            cursor: pointer; 
            font-size:10px; 
            border-radius:13px; 
            border:solid #B2BEB5 thin;
        }
        .btn_add
        {
            background-color: #fff; color: #202020; cursor: pointer; font-size:10px; border-radius:13px; border:solid #B2BEB5 thin;
        }
        .btn_upload
        {
            background-color: #202020; color: #fff; cursor: pointer; font-size:10px; border-radius:13px; border:solid #B2BEB5 thin; margin-left: 4px; margin-right: 10px;
        }

        .btn_search
        {
            width: 20%; margin-top: -10px;
        }
        .saveBtn
        {
            background-color: #202020;
            color: #fff;
            padding: 5px 15px;
            border-radius: 25px;
        }

        .head-row
        {
            background-color: #202020; color: #fff; padding: 3px 5px;
        }
        .search
        {
            margin-right: 10px;
        }


        a
        {
            color: #007FFF;
        }




        .margin_tb
        {
            margin-top: 75px; 
            margin-bottom: 100px;
        }

        .padding_tb
        {
            padding: 15px 0px;
        }
        .no_padding
        {
            padding: 0px;
        }
        .tr_bg
        {
            background-color: #A1CAF1;
            font-size: 12px;
            padding: 0px 5px;
        }

        .th_fsize
        {
            font-size:12px;
        }

        .img-min-max
        {
            max-height: 150px; min-height: 150px;
            max-width: 100%;  min-width: 100%;
        }
        .modal-mt
        {
            margin-top: 4%;
        }

        .add_colorBtn
        {
            font-size:10px; border-radius:13px; margin-top: -4px; margin-left:4px;
        }

        .tab_bg
        {
            background-color: #A1CAF1;
        }



        img.bg 
        {
          /* Set rules to fill background */
          min-height: 100%;
          min-width: 1024px;
            
          /* Set up proportionate scaling */
          width: 100%;
          height: auto;
            
          /* Set up positioning */
          position: fixed;
          top: 0;
          left: 0;
        }

        @media screen and (max-width: 1024px) 
        { /* Specific to this particular image */
          img.bg 
          {
            left: 50%;
            margin-left: -512px;   /* 50% */
          }
        }

        .img-wh
        {            
          min-height: 250px;     min-width: 100%;
          max-height: 250px;     max-width: 100%;
        }




        /*DATATABLE CSS*/
        

        .table thead th
        {
            vertical-align:middle;
            padding: 5px; 
        }

        .table td, .table th
        {
            padding: 5px 7px;
            vertical-align: middle;
            border-top: 0px solid #dee2e6;
        }

        .bigModal
        {
            width:1080px;
            margin-left:-300px;
        }

        .slider-mm
        {
            max-height: 450px; min-height: 450px; max-width: 95%; min-width: 95%;
        }

        .t-nail
        {
            max-height: 45px; min-height: 45px; max-width: 5%; min-width: 5%;
        }




        /*RATING CSS*/
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        fieldset, label { margin: 0; padding: 0; }
        body{ margin: 0px; }
        h1 { font-size: 1.5em; margin: 10px; }

        /****** Style Star Rating Widget *****/

        .rating { 
          border: none;
          float: left;
        }

        .rating > input { display: none; } 
        .rating > label:before { 
          margin: 5px;
          font-size: 1.25em;
          font-family: FontAwesome;
          display: inline-block;
          content: "\f005";
        }

        .rating > .half:before { 
          content: "\f089";
          position: absolute;
        }

        .rating > label { 
          color: #ddd; 
         float: right; 
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

    </style>


</head>
<body class="animsition">
    
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar"> Free shipping for standard order over $100  </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25"> Help & FAQs  </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">  My Account  </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25"> EN  </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25"> USD </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    
                    <!-- Logo desktop -->       
                    <a href="#" class="logo">
                        <img src="{{URL::asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO">
                    </a>

                    <?php $category = \App\Category::where('display_id', '1')->orderBy('category_name', 'asc')->get(); ?>
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="{{url('home')}}">Home</a>
                            </li>

                            <li>
                                <a href="#">Products</a>
                                <ul class="sub-menu">
                                    @if($category)
                                        @foreach($category as $categories)
                                            <li><a href="{{url('products/category/'.$categories->id)}}">{{$categories->category_name}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="#">Features</a>
                            </li>

                            <li>
                                <a href="{{url('/cart')}}">Cart</a>
                            </li>

                            <li>
                                <a href="#">About</a>
                            </li>

                            <li>
                                <a href="#">Contact</a>
                            </li>

                            <li class="">
                                <a href="#">Admin</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('/products')}}">Products</a></li>
                                    <li><a href="{{url('/categories')}}">Categories</a></li>
                                    <li><a href="#">Sub Category</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <!-- RETRIEVING USERS NOTIFICATIONS -->
                    <?php  $user_id = \Auth::user()->id;    $cart = \App\Cart::where('user_id', $user_id)->Where('stage', '0')->count();    ?>
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{$cart}}">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>  
        </div>


        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->        
            <div class="logo-mobile">
                <a href="index.html"><img src="{{URL::asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m p-lr-10 trans-04"> Help & FAQs </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04"> My Account </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04"> EN </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04"> USD </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="#">Shop</a>
                </li>

                <li>
                    <a href="#" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="#">Blog</a>
                </li>

                <li>
                    <a href="#">About</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="{{URL::asset('assets/images/icons/icon-close2.png')}}" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>









             @yield('content')









    <!-- Cart -->

    <?php  
        $user_id = \Auth::user()->id;    $cart_item = \App\Cart::where('user_id', $user_id)->Where('stage', '0')->orderBy('id', 'desc')->get();    
    ?>
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            
            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    @if($cart_item)
                        @foreach($cart_item as $cart_items)
                            <li class="header-cart-item flex-w flex-t m-b-12">   
                                <?php   $qty = $cart_items->quantity;  $price = $cart_items->price;      $tot = ($qty * $price);    $img = $cart_items->product->product_image->image_1;  ?>
                                <a href="#" onclick="showmodal('del_item')" onmouseenter="getId({{$cart_items->id}})" data-toggle="tooltip" title="Remove {{$cart_items->product->product_name}} From Your Cart">
                                    <div class="header-cart-item-img">
                                        <img src="{{URL::asset('assets/images/Products/'.$img.'/'.$img)}}"" alt="IMG">
                                    </div>
                                </a>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        {{$cart_items->product->product_name}}
                                    </a>

                                    <span class="header-cart-item-info">
                                        {{$cart_items->quantity}} x <span style="font-size: 14px">&#8358; </span> <?= number_format($cart_items->product->unit_price, 2) ?>
                                        <?php  $qtys = $cart_items->quantity; $prices = $cart_items->product->unit_price;  ?>
                                        <?php $tots = ($qtys * $prices); ?>
                                        <input type="hidden" step="0.01" class="form-control amt" name="amount" id="amount" onkeyup="checkValue(this)" value="{{$tots}}">
                                    </span>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
                
                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: <span style="font-size: 18px">&#8358; </span>  <span class="header-cart-total w-full p-tb-40 total_amt" name="total_amt" id="total_amt" style="color: #E52B50"></span>
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="{{url('cart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10" target="_blank"> View Cart </a>

                        <a href="{{url('cart/checkout')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10" target="_blank"> Check Out </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    








<!-- Remove Item From Cart modal -->
<div id="del_item" class="modal fade margin_tb" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
          <form id="removeForm" action="{{url('cart/removeItemFromCart')}}" method="POST">
            {{ csrf_field() }}
          

                 <label for="" class="col-sm-12 col-form-label"> Are You Sure You Want To Remove Item From Cart ? </label>
                 <input type="hidden" class="form-control" name="idd" id="idd" value="">


              <div class="modal-footer" id="add_footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="submit" name="" id="" class="btn btn-success"> <i class="fa fa-plus"></i> Yes</button>
              </div>
          </form>
        </div>
    </div>
    </div>  
</div>






    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shoes
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns 
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('assets/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('assets/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('assets/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('assets/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="{{URL::asset('assets/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | My Store <br> This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

<!--===============================================================================================-->  
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <script>
        $(".js-select2").each(function()
        {
            $(this).select2(
            {
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/parallax100/parallax100.js') }}"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e){
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function(){
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function(){
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function(){
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function()
        {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function()
            {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script>
        $('.js-pscroll').each(function()
        {
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, 
            {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function()
            {
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- DATATABLES -->
<!--===============================================================================================-->
    <!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script> -->


        <!-- Required datatable js -->
        <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('assets/vendor/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/buttons.colVis.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('assets/vendor/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
       <!--  <script src="{{ asset('assets/vendor/datatables/datatables.init.js') }}"></script> -->



        <!-- TOAST SCRIPT  -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>

        <!-- Chart JS -->
        <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>

        <script type="text/javascript">
            //set ID
            function getId(id)
            {
                $('#idd').val(id);   
            }

            $(function()
            {
                var total_amt = 0;
                $('.amt').each(function()            
                {
                    total_amt += parseFloat($(this).val());
                });
                $(".total_amt").html(total_amt.toFixed(2));
                //console.log(total_amt.toFixed(2));
            });
        </script>


        <!-- TOOLTIP -->
        <script>
            $(document).ready(function()
            {
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>

        @yield('script')

</body>
</html>