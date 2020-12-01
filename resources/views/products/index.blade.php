@extends('layouts.app')

@section('content')









<div class="container margin_tb" style="">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#add_products">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#add_photos">Product Photos </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#add_attributes">Product Attribute</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#add_colors">Product Color</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#add_features">Product Features</a>
      </li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content" style="">
      <div class="tab-pane container no_padding active" id="add_products">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Products
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Product Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
                <table class="table table-striped table-hover mb-0" id="product_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Category</th>
                        <th>Product</th>
                        <th>Title </th>
                        <th>Description </th>
                        <th>Cost Price </th>
                        <th>Unit Price </th>
                        <th>Quantity </th>
                        <th>Display </th>
                        <th style=""> 
                            <a onclick="showmodal('add_product')" style="" class="btn_add btn-sm pull-right" title="Add New Product Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                        @if($product)
                            @foreach($product as $products)
                                <tr>   
                                    <th class="th_fsize">{{$products->id}}</th>
                                    <th class="th_fsize">@if($products->category) {{$products->category->category_name}} @endif</th>
                                    <th class="th_fsize">{{$products->product_name}}</th>
                                    <th class="th_fsize">{{$products->title}}</th>
                                    <th class="th_fsize">{{$products->description}}</th>
                                    <th class="th_fsize">{{$products->cost_price}}</th>
                                    <th class="th_fsize">{{$products->unit_price}}</th>
                                    <th class="th_fsize">{{$products->quantity}}</th>
                                    <th class="th_fsize">@if($products->status_display) {{$products->status_display->value}} @endif</th>
                                    <th>
                                        <a href="#" class="pull-right " title="View {{$products->product_name}} Details" style="font-size:12px"> 
                                            <i class="fa fa-eye text-inverse m-r-10"></i> 
                                        </a>
                                        <a href="#" class="pull-right" title="Edit {{$products->product_name}} Details" onclick="load_product({{$products->id}})" style="font-size:12px"> 
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



      <div class="tab-pane container fade no_padding" id="add_photos">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Products
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Product Photo Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
                <table class="table table-striped table-hover mb-0" id="photo_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Product</th>
                        <th>Photo 1</th>
                        <th>Photo 2</th>
                        <th>Photo 3</th>
                        <th>Photo 4</th>
                        <th>Photo 5</th>
                        <th>Photo 6</th>
                        <th>Photo 7</th>
                        <th>Photo 8 </th>
                        <th>Photo 9</th>
                        <th>Photo 10</th>
                        <th style=""> 
                            <a onclick="showmodal('add_photo')" style="" class="btn_add btn-sm pull-right" title="Add New Product Photo Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                        @if($prod_image)
                            @foreach($prod_image as $prod_images)
                                <tr>   
                                    <th class="th_fsize">{{$prod_images->id}}</th>
                                    <th class="th_fsize">@if($prod_images->product) {{$prod_images->product->product_name}} @endif</th>
                                    <th class="th_fsize">{{$prod_images->image_1}}</th>
                                    <th class="th_fsize">{{$prod_images->image_2}}</th>
                                    <th class="th_fsize">{{$prod_images->image_3}}</th>
                                    <th class="th_fsize">{{$prod_images->image_4}}</th>
                                    <th class="th_fsize">{{$prod_images->image_5}}</th>
                                    <th class="th_fsize">{{$prod_images->image_6}}</th>
                                    <th class="th_fsize">{{$prod_images->image_7}}</th>
                                    <th class="th_fsize">{{$prod_images->image_8}}</th>
                                    <th class="th_fsize">{{$prod_images->image_9}}</th>
                                    <th class="th_fsize">{{$prod_images->image_10}}</th>
                                    <th>
                                        <a href="#" class="pull-right " title="View @if($prod_images->product) {{$prod_images->product->product_name}} @endif Details" style="font-size:12px"> 
                                            <i class="fa fa-eye text-inverse m-r-10"></i> 
                                        </a>
                                        <a href="#" class="pull-right" title="Edit @if($prod_images->product) {{$prod_images->product->product_name}} @endif Details" onclick="load_product_photo({{$prod_images->id}})" style="font-size:12px"> 
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



      <div class="tab-pane container fade no_padding" id="add_attributes">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Products Attributes
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Product Attributes Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
                <table class="table table-striped table-hover mb-0" id="attibute_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Product</th>
                        <th>Discount</th>
                        <th>Feature</th>
                        <th>Shipping Fee</th>
                        <th>Product Conditions</th>
                        <th style=""> 
                            <a onclick="showmodal('add_prod_attr')" style="" class="btn_add btn-sm pull-right" title="Add New Product Attributes Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                        @if($prod_attribute)
                            @foreach($prod_attribute as $prod_attributes)
                                <tr>   
                                    <th class="th_fsize">{{$prod_attributes->id}}</th>
                                    <th class="th_fsize">@if($prod_attributes->product) {{$prod_attributes->product->product_name}} @endif</th>
                                    <th class="th_fsize">{{$prod_attributes->discount}}</th>
                                    <th class="th_fsize">@if($prod_attributes->status_feature) {{$prod_attributes->status_feature->value}} @endif</th>
                                    <th class="th_fsize">{{$prod_attributes->shipping_fee}}</th>
                                    <th class="th_fsize">@if($prod_attributes->condition) {{$prod_attributes->condition->value}} @endif</th>
                                    <th>
                                        <a href="#" class="pull-right " title="View @if($prod_attributes->product) {{$prod_attributes->product->product_name}} @endif Details" style="font-size:12px"> 
                                            <i class="fa fa-eye text-inverse m-r-10"></i> 
                                        </a>
                                        <a href="#" class="pull-right" title="Edit @if($prod_attributes->product) {{$prod_attributes->product->product_name}} @endif Details" onclick="load_product_attribute({{$prod_attributes->id}})" style="font-size:12px"> 
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



      <div class="tab-pane container fade no_padding" id="add_colors">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Products Colors
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Product Colors Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
                <table class="table table-striped table-hover mb-0" id="attibute_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Product</th>
                        <th>Color</th>
                        <th style=""> 
                            <a onclick="showmodal('add_prod_color')" style="" class="btn_add btn-sm pull-right" title="Add New Product Colors Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                        @if($prod_color)
                            @foreach($prod_color as $prod_colors)
                                <tr>   
                                    <th class="th_fsize">{{$prod_colors->id}}</th>
                                    <th class="th_fsize">@if($prod_colors->product) {{$prod_colors->product->product_name}} @endif</th>
                                    <th class="th_fsize">{{$prod_colors->color_name}}</th>
                                    <th>
                                        <a href="#" class="pull-right " title="View @if($prod_colors->product) {{$prod_colors->product->product_name}} @endif Details" style="font-size:12px"> 
                                            <i class="fa fa-eye text-inverse m-r-10"></i> 
                                        </a>
                                        <a href="#" class="pull-right" title="Edit @if($prod_colors->product) {{$prod_colors->product->product_name}} @endif Details" onclick="load_product_color({{$prod_colors->id}})" style="font-size:12px"> 
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



      <div class="tab-pane container fade no_padding" id="add_features">
        <div class="table-responsive padding_tb">   
            <h5 style="margin-left: 5px; color: #aaa"> All Products Features
                <a onclick="showmodal('upl_')" style="" class="btn_upload btn-sm pull-right" title="Upload Product Features Excel Here">  <i class="fa fa-upload text-inverse"></i> 
                </a> 
            </h5>
                <table class="table table-striped table-hover mb-0" id="feature_table">
                    <thead>
                    <tr class="tr_bg">
                        <th>#</th>
                        <th>Product</th>
                        <th>Type</th>
                        <th>Feature 1</th>
                        <th>Feature 2</th>
                        <th style=""> 
                            <a onclick="showmodal('add_prod_feature')" style="" class="btn_add btn-sm pull-right" title="Add New Product Features Here">  <i class="fa fa-plus text-inverse"></i> 
                            </a>
                        </th>
                    </tr>

                    </thead>
                    <tbody>
                        @if($prod_feature)
                            @foreach($prod_feature as $prod_features)
                                <tr>   
                                    <th class="th_fsize">{{$prod_features->id}}</th>
                                    <th class="th_fsize">@if($prod_features->product) {{$prod_features->product->product_name}} @endif</th>
                                    <th class="th_fsize">@if($prod_features->type) {{$prod_features->type->value}} @endif</th>
                                    <th class="th_fsize">{{$prod_features->value_1}}</th>
                                    <th class="th_fsize">{{$prod_features->value_2}}</th>
                                    <th>
                                        <a href="#" class="pull-right " title="View @if($prod_features->product) {{$prod_features->product->product_name}} @endif Details" style="font-size:12px"> 
                                            <i class="fa fa-eye text-inverse m-r-10"></i> 
                                        </a>
                                        <a href="#" class="pull-right" title="Edit @if($prod_features->product) {{$prod_features->product->product_name}} @endif Details" onclick="load_product_feature({{$prod_features->id}})" style="font-size:12px"> 
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

    </div>      
</div>














<!-- Add Product modal -->
<div id="add_product" class="modal fade modal-mt" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body">
          <form id="prodForm" action="{{url('products/addProducts')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="category_id" class="col-form-label"> Product Category <a onclick="showmodal('add_category')" style="" class="add-btn btn-sm pull-right" title="Add New Category Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="category_id" id="category_id" required>
                        <option value=""> Select Category </option>
                        @if($categories)
                            @foreach($categories as $categories)
                                <option value="{{$categories->id}}"> {{$categories->category_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-sm-6">
                <label for="product_name" class="col-form-label"> Product Name </label>
                    <input type="text" class="form-control" placeholder="Product Name" name="product_name" id="product_name" required>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="title" class="col-form-label"> Product Title </label>
                    <input type="text" class="form-control" placeholder="This is Your Product Title/Heading" name="title" id="title" required>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="description" class="col-form-label"> Product Description </label>
                    <textarea rows="2" class="form-control" placeholder="Describe Your Product Here" name="description" id="description" required></textarea>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="cost_price" class="col-form-label"> Product Cost Price </label>
                    <input type="text" class="form-control" placeholder="Product Cost Pricing" name="cost_price" id="cost_price" required>
                </div>

                <div class="col-sm-6">
                <label for="unit_price" class="col-form-label"> Product Unit Price </label>
                    <input type="text" class="form-control" placeholder="Price each individual Product Cost" name="unit_price" id="unit_price" required>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="quantity" class="col-form-label"> Product Quantity </label>
                    <input type="number" class="form-control" placeholder="Product Quantity In Stock" name="quantity" id="quantity" required>
                </div>

                <div class="col-sm-6">
                <label for="display" class="col-form-label"> Display Product </label>
                    <select class="form-control" name="display" id="display" required>
                    <option value=""> Select Display Product Status </option>   
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
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Product</button>
          </div>
          </form>
        </div>
    </div>
    </div>  
</div>

<!-- Edit Prroduct modal -->
<div id="edit_prod" class="modal fade modal-mt"" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header edit_bg">
            <h4 class="modal-title">Edit Product</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div id="editprod"></div>
          </div>
    </div>
    </div>  
</div>





<!-- Add Product Photo modal -->
<div id="add_photo" class="modal fade modal-mt"" role="dialog" style="margin-top: 4%">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product Photo </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body">
          <form id="photoForm" action="{{url('products/addProductPhotos')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="product_id" class="col-form-label"> Product Name <a onclick="showmodal('add_category')" style="" class="add-btn btn-sm pull-right" title="Add New Product Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="product_id" id="product_id" required>
                        <option value=""> Select Product </option>
                        @if($prod_photos)
                            @foreach($prod_photos as $prod_photos)
                                <option value="{{$prod_photos->id}}"> {{$prod_photos->id.' : '.$prod_photos->product_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>                
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="image_1" class="col-form-label"> Photo 1</label>
                    <input type="file" class="form-control" placeholder="Photo 1" name="image_1" multiple id="image_1">

                    <div class="gallery_1"></div>
                </div>

                <div class="col-sm-6">
                <label for="image_2" class="col-form-label"> Photo 2</label>
                    <input type="file" class="form-control" placeholder="Photo 2" name="image_2" id="image_2">  <div class="gallery_2"></div>

                    {{-- <div> <img id="preview_2" src="{{URL::asset('assets/images/noimage.png')}}" alt="Previewing Your Photo" class="img-min-max" /> </div> --}}
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="image_3" class="col-form-label"> Photo 3</label>
                    <input type="file" class="form-control" placeholder="Photo 3" name="image_3" id="image_3">    <div class="gallery_3"></div>
                </div>

                <div class="col-sm-6">
                <label for="image_4" class="col-form-label"> Photo 4</label>
                    <input type="file" class="form-control" placeholder="Photo 4" name="image_4" id="image_4">    <div class="gallery_4"></div>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="image_5" class="col-form-label"> Photo 5</label>
                    <input type="file" class="form-control" placeholder="Photo 5" name="image_5" id="image_5">    <div class="gallery_5"></div>
                </div>

                <div class="col-sm-6">
                <label for="image_6" class="col-form-label"> Photo 6</label>
                    <input type="file" class="form-control" placeholder="Photo 6" name="image_6" id="image_6">    <div class="gallery_6"></div>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="image_7" class="col-form-label"> Photo 7</label>
                    <input type="file" class="form-control" placeholder="Photo 7" name="image_7" id="image_7">    <div class="gallery_7"></div>
                </div>

                <div class="col-sm-6">
                <label for="image_8" class="col-form-label"> Photo 8</label>
                    <input type="file" class="form-control" placeholder="Photo 8" name="image_8" id="image_8">    <div class="gallery_8"></div>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="image_9" class="col-form-label"> Photo 9</label>
                    <input type="file" class="form-control" placeholder="Photo 9" name="image_9" id="image_9">    <div class="gallery_9"></div>
                </div>

                <div class="col-sm-6">
                <label for="image_10" class="col-form-label"> Photo 10</label>
                    <input type="file" class="form-control" placeholder="Photo 10" name="image_10" id="image_10">    <div class="gallery_10"></div>
                </div>
            </div> 
           

            

          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Upload All Photo</button>
          </div>
          </form>
        </div>
    </div>
    </div>  
</div>






<!-- Add Product Attribute modal -->
<div id="add_prod_attr" class="modal fade modal-mt" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product Attribute </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body">
          <form id="attrForm" action="{{url('products/addProductAttributes')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="product_id" class="col-form-label"> Product <a onclick="showmodal('add_product')" style="" class="add-btn btn-sm pull-right" title="Add New Product Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="product_id" id="product_id" required>
                        <option value=""> Select Product </option>
                        @if($prod_attrs)
                            @foreach($prod_attrs as $prod_attrs)
                                <option value="{{$prod_attrs->id}}"> {{$prod_attrs->product_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="discount" class="col-form-label"> Discount</label>
                    <input type="text" class="form-control" placeholder="Discount" name="discount" id="discount" required>
                </div>

                <div class="col-sm-6">
                <label for="feature" class="col-form-label"> Make Feature Product ? </label>
                    <select class="form-control" name="feature" id="feature" required>
                        <option value=""> Select Status </option>
                        @if($feature)
                            @foreach($feature as $feature)
                                <option value="{{$feature->id}}"> {{$feature->value}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="shipping_fee" class="col-form-label"> Shipping Fee </label>
                    <input type="text" class="form-control" placeholder="Shipping Fee" name="shipping_fee" id="shipping_fee" required>
                </div>

                <div class="col-sm-6">
                <label for="product_condition" class="col-form-label"> Product Condition </label>
                    <select class="form-control" name="product_condition" id="product_condition" required>
                        @if($condition)
                            @foreach($condition as $condition)
                                <option value="{{$condition->id}}"> {{$condition->value}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>  
      
            

          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Attribute</button>
          </div>
          </form>
        </div>
    </div>
    </div>  
</div>

<!-- Edit Prroduct Attribute modal -->
<div id="edit_attr" class="modal fade modal-mt"" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header edit_bg">
            <h4 class="modal-title">Edit Product Attribute</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div id="editattr"></div>
          </div>
    </div>
    </div>  
</div>






<!-- Add Product Color modal -->
<div id="add_prod_color" class="modal fade modal-mt" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product Color </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body" id="">
          <form id="colorForm" action="{{url('products/addProductColors')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div id="div_color">
            <div class="form-group row" id="">
                <div class="col-sm-10">
                <label for="product_id" class="col-form-label"> Product <a onclick="showmodal('add_product')" style="" class="add-btn btn-sm pull-right" title="Add New Product Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="product_id" id="product_id" required>
                        <option value=""> Select Product </option>
                        @if($prod_col)
                            @foreach($prod_col as $prod_col)
                                <option value="{{$prod_col->id}}"> {{$prod_col->product_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-sm-2">
                    <button type="button" class="btn btn-info pull-right add_colorBtn" id="addColorBtn" style=""> Color </button>
                </div>
                    <input type="hidden" name="count_color" id="count_color" value="" class="form-control"> 
            </div> 
            </div>
                     

            

          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Color</button>
          </div>
          </form>
        </div>
    </div>
    </div>  
</div>

<!-- Edit Prroduct Attribute modal -->
<div id="edit_color" class="modal fade modal-mt"" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header edit_bg">
            <h4 class="modal-title">Edit Product Color</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div id="editcolor"></div>
          </div>
    </div>
    </div>  
</div>





<!-- Add Product Features modal -->
<div id="add_prod_feature" class="modal fade modal-mt" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header add_bg">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product Features </h4>
            <button type="button" class="close" data-dismiss="modal" style="color: red">&times;</button>
            
          </div>
          <div class="modal-body" id="">
          <form id="featureForm" action="{{url('products/addProductFeatures')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div id="div_feat">
            <div class="form-group row" id="">
                <div class="col-sm-10">
                <label for="product_id" class="col-form-label"> Product <a onclick="showmodal('add_product')" style="" class="add-btn btn-sm pull-right" title="Add New Product Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="product_id" id="product_id" required>
                        <option value=""> Select Product </option>
                        @if($prod_feat)
                            @foreach($prod_feat as $prod_feat)
                                <option value="{{$prod_feat->id}}"> {{$prod_feat->product_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-sm-2">
                    <button type="button" class="btn btn-info pull-right add_colorBtn" id="addFeatureBtn" style=""> Features </button>
                </div>
                    <input type="hidden" name="count_feature" id="count_feature" value="" class="form-control"> 
            </div> 
            </div>
                     
            

          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Features</button>
          </div>
          </form>
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
    if(tableId == 'product_table')
    {
        $('#'+tableId).prepend('<tr> <td> '+data.id+' </td>  <td> '+data.category_id+' </td>  <td> '+data.product_name+' </td>  <td> '+data.title+' </td>    <td> '+data.description+' </td>  <td> '+data.cost_price+' </td>  <td> '+data.unit_price+' </td>  <td> '+data.quantity+' </td>  <td> '+data.display+' </td>  <td>  <a  onclick="load_product('+data.id+')" style="font-size:12px">  <i class="fa fa-pencil text-inverse m-r-10" data-toggle="tooltip" data-original-title="Edit Product Here"></i> </a>  <a onclick="view_product('+data.id+')" style="font-size:12px"> <i class="fa fa-eye text-inverse m-r-10" data-toggle="tooltip" data-original-title="View Product Details Here"></i>   </a></td>   </tr>');
    }

    else if(tableId == 'photo_table')
    {
        $('#'+tableId).prepend('<tr> <td> '+data.id+' </td>  <td> '+data.product+' </td>  <td> '+data.image_1+' </td>  <td> '+data.image_2+' </td>  <td> '+data.image_3+' </td>  <td> '+data.image_4+' </td>  <td> '+data.image_5+' </td>  <td> '+data.image_6+' </td>  <td> '+data.image_7+' </td>  <td> '+data.image_8+' </td>  <td> '+data.image_9+' </td>  <td> '+data.image_10+' </td>   <td>  <a  onclick="load_product_photo('+data.id+')" style="font-size:12px">  <i class="fa fa-pencil text-inverse m-r-10" data-toggle="tooltip" data-original-title="Edit Product Photo Here"></i> </a>  <a onclick="view_product_photo('+data.id+')" style="font-size:12px"> <i class="fa fa-eye text-inverse m-r-10" data-toggle="tooltip" data-original-title="View Product Photo Here"></i>   </a></td>   </tr>');
    }

    else if(tableId == 'attibute_table')
    {
        $('#'+tableId).prepend('<tr> <td> '+data.id+' </td>  <td> '+data.product+' </td>  <td> '+data.discount+' </td>  <td> '+data.feature+' </td>  <td> '+data.shipping_fee+' </td>  <td> '+data.product_condition+' </td>  <td>  <a  onclick="load_product_attribute('+data.id+')" style="font-size:12px">  <i class="fa fa-pencil text-inverse m-r-10" data-toggle="tooltip" data-original-title="Edit Product Attribute Here"></i> </a>  <a onclick="view_product_attribute('+data.id+')" style="font-size:12px"> <i class="fa fa-eye text-inverse m-r-10" data-toggle="tooltip" data-original-title="View Product Attribute Here"></i>   </a></td>   </tr>');
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
                toastr.success(data.info, {timeOut:15000});
                return;
            }
           
            return toastr.error(data.info, {timeOut:15000});

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
        $("#prodForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('prodForm', "{{url('products/addProducts')}}", 'product_table', 'progress', 'add_product');
        });

        // Product Photos
        $("#photoForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('photoForm', "{{url('products/addProductPhotos')}}", 'photo_table', 'progress', 'add_photo');
        });

        // Product Attibute
        $("#attrForm").on('submit',function(e)
        { 
            e.preventDefault();
            processForm('attrForm', "{{url('products/addProductAttributes')}}", 'attibute_table', 'progress', 'add_prod_attr');
        });


    });
</script>



<script type="text/javascript"> //FUNCTIONS TO LOAD EDIT MODALS

    function load_product(id)
    {   
        $('#editprod').load("{{url('products')}}/modals/editProducts?id="+id);
        $('#edit_prod').modal('show');
    }

    function load_product_photo(id)
    {   
        $('#editphoto').load("{{url('products')}}/modals/editCompany?id="+id);
        $('#edit_photo').modal('show');
    }
    function view_product_photo(id)
    {   
        $('#viewphoto').load("{{url('products')}}/modals/editCompany?id="+id);
        $('#view_photo').modal('show');
    }

    function load_product_attribute(id)
    {   
        $('#editattr').load("{{url('products')}}/modals/editProductAttributes?id="+id);
        $('#edit_attr').modal('show');
    }

</script>






<script type="text/javascript">
    $(function()
    {
        //$('#product_table').DataTable();
        // $('#photo_table').DataTable();
    });
</script>


<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    function readURL(input) 
    {

      if (input.files && input.files[0]) 
      {
        var reader = new FileReader();

        reader.onload = function(e) 
        {
          $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#image").change(function() 
    {
      readURL(this);
    });
</script>





<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_1').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_1');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_2').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_2');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_3').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_3');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_4').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_4');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_5').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_5');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_6').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_6');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_7').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_7');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_8').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_8');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_9').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_9');
        });
    });
</script>

<script type="text/javascript">     //PHOTO PREVIEW JQUERY FUNCTIONALITY
    $(function() 
    {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) 
        {
            if (input.files) 
            {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) 
                {
                    var reader = new FileReader();

                    reader.onload = function(event) 
                    {
                        $($.parseHTML('<img class="img-min-max">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#image_10').on('change', function() 
        {
            imagesPreview(this, 'div.gallery_10');
        });
    });
</script>




<script type="text/javascript">
    $(function()
    {
        //ADDING COLOR
        var i = 0; 
        $('#addColorBtn').on('click', function ()  
        {
            i++;  
            $('#div_color').append(
            '<div id="row'+i+'" class="form-group row">   <div class="col-sm-10">        <label for="color_name'+i+'" class="col-form-label"> Color</label>     <input type="text" class="form-control" placeholder="Color" name="color_name'+i+'" id="color_name'+i+'">    </div>    <div class="col-sm-2"> <a class="btn_remove_color" name="remove" id="'+i+'" href="#" title="Remove This Color" style="padding:10px">  <i class="fa fa-remove text-inverse m-r-10" style="color:red"></i>    </a> </div>   </div> </div>'

        );
            document.getElementById('count_color').value = i;   
        });
        
        //Function To         
        $(document).on('click', '.btn_remove_color', function ()
        {
            var button_id = $(this).attr("id");
            $('#row'+button_id+"").remove();
            
            //reducing the count value
            document.getElementById('count_color').value = --i;
        });


        //ADDING FEATURE
        var i = 0; 
        $('#addFeatureBtn').on('click', function ()  
        {
            i++;  
            $('#div_feat').append(
            '<div id="row'+i+'" class="form-group col-sm-12 row">     <div class="col-sm-3 pull-left">     <select class="form-control" name="type_id'+i+'" id="type_id'+i+'" required>    <option value=""> Select Product Type </option>    <option value="1"> Sizes </option>      <option value="2"> Dimension </option>   </select>     </div>    <div class="col-sm-4 pull-left">     <input type="text" class="form-control" placeholder="Feature 1" name="value_1'+i+'" id="value_1'+i+'">    </div>    <div class="col-sm-4 pull-left">      <input type="text" class="form-control" placeholder="Feature 2" name="value_2'+i+'" id="value_2'+i+'">    </div>   <div class="col-sm-1 pull-left"> <a class="btn_remove_feat" name="remove" id="'+i+'" href="#" title="Remove This Feature" style="padding:10px">  <i class="fa fa-remove text-inverse m-r-10" style="color:red"></i>    </a>   </div>'

        );
            document.getElementById('count_feature').value = i;   
        });
        
        //Function To         
        $(document).on('click', '.btn_remove_feat', function ()
        {
            var button_id = $(this).attr("id");
            $('#row'+button_id+"").remove();
            
            //reducing the count value
            document.getElementById('count_feature').value = --i;
        });
    })
</script>

<script type="text/javascript">
    $(function()
    {
        $('.gallery_1').click(function()
        {
            $(this).hide();
        })
    })
</script>



@endsection


