<form id="" action="{{url('products/addProducts')}}" method="POST">
        {{ csrf_field() }}


          <input type="hidden" class="form-control" id="id" name="id" value="{{$PRODUCT->id}}" required> 


       <div class="form-group row">
                <div class="col-sm-6">
                <label for="category_id" class="col-form-label"> Product Category <a onclick="showmodal('add_category')" style="" class="add-btn btn-sm pull-right" title="Add New Category Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="category_id" id="category_id" required>
                        @if($one_cat) <option value={{$one_cat->id}}""> {{$one_cat->category_name}} </option> @else <option> </option> @endif
                        @if($all_cat)
                            @foreach($all_cat as $all_cat)
                                <option value="{{$all_cat->id}}"> {{$all_cat->category_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col-sm-6">
                <label for="product_name" class="col-form-label"> Product Name </label>
                    <input type="text" class="form-control" placeholder="Product Name" name="product_name" id="product_name" value="{{$PRODUCT->product_name}}" required>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="title" class="col-form-label"> Product Title </label>
                    <input type="text" class="form-control" placeholder="This is Your Product Title/Heading" name="title" id="title" value="{{$PRODUCT->title}}" required>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-12">
                <label for="description" class="col-form-label"> Product Description </label>
                    <textarea rows="2" class="form-control" placeholder="Describe Your Product Here" name="description" id="description" required>{{$PRODUCT->description}}</textarea>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="cost_price" class="col-form-label"> Product Cost Price </label>
                    <input type="text" class="form-control" placeholder="Product Cost Pricing" name="cost_price" id="cost_price" value="{{$PRODUCT->cost_price}}" required>
                </div>

                <div class="col-sm-6">
                <label for="unit_price" class="col-form-label"> Product Unit Price </label>
                    <input type="text" class="form-control" placeholder="Price each individual Product Cost" name="unit_price" id="unit_price" value="{{$PRODUCT->unit_price}}" required>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="quantity" class="col-form-label"> Product Quantity </label>
                    <input type="number" class="form-control" placeholder="Product Quantity In Stock" name="quantity" id="quantity" value="{{$PRODUCT->quantity}}" required>
                </div>

                <div class="col-sm-6">
                <label for="display" class="col-form-label"> Display Product </label>
                    <select class="form-control" name="display" id="display" required>
                        @if($one_dis) <option value="{{$one_dis->id}}"> {{$one_dis->value}} </option>  @endif
                        @if($all_dis)
                            @foreach($all_dis as $all_dis)
                                <option value="{{$all_dis->id}}"> {{$all_dis->value}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 

       
       
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Update Product</button>
          </div>>
</form>


</script>