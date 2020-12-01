<form id="" action="{{url('products/addProductAttributes')}}" method="POST">
        {{ csrf_field() }}


          <input type="hidden" class="form-control" id="id" name="id" value="{{$ATTRIBUTE->id}}" required> 


       <div class="form-group row">
                <div class="col-sm-12">
                <label for="product_id" class="col-form-label"> Product <a onclick="showmodal('add_product')" style="" class="add-btn btn-sm pull-right" title="Add New Product Here">  <i class="fa fa-plus text-inverse"></i> </a></label>
             
                    <select class="form-control" name="product_id" id="product_id" required>
                        @if($one_pro) <option value={{$one_pro->id}}""> {{$one_pro->product_name}} </option> @else <option> </option> @endif
                        @if($all_pro)
                            @foreach($all_pro as $all_pro)
                                <option value="{{$all_pro->id}}"> {{$all_pro->product_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 
            
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="discount" class="col-form-label"> Discount</label>
                    <input type="text" class="form-control" placeholder="Discount" name="discount" id="discount" value="{{$ATTRIBUTE->discount}}" required>
                </div>
                
                <div class="col-sm-6">
                <label for="feature" class="col-form-label"> Make Feature Product ? </label>
                    <select class="form-control" name="feature" id="feature" required>
                        @if($one_fea) <option value="{{$one_fea->id}}"> {{$one_fea->value}} </option>  @endif
                        @if($all_fea)
                            @foreach($all_fea as $all_fea)
                                <option value="{{$all_fea->id}}"> {{$all_fea->value}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 
           

            <div class="form-group row">
                <div class="col-sm-6">
                <label for="shipping_fee" class="col-form-label"> Shipping Fee </label>
                    <input type="text" class="form-control" placeholder="Shipping Fee" name="shipping_fee" id="shipping_fee" value="{{$ATTRIBUTE->shipping_fee}}" required>
                </div>

                <div class="col-sm-6">
                <label for="product_condition" class="col-form-label"> Product Condition </label>
                    <select class="form-control" name="product_condition" id="product_condition" required>
                        @if($one_con) <option value="{{$one_con->id}}"> {{$one_con->value}} </option>  @endif
                        @if($all_con)
                            @foreach($all_con as $all_con)
                                <option value="{{$all_con->id}}"> {{$all_con->value}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 

       
       
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Update Product Attribute</button>
          </div>>
</form>


</script>