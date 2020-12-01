<form id="" action="{{url('categories/addCategories')}}" method="POST">
        {{ csrf_field() }}


    <input type="hidden" class="form-control" id="id" name="id" value="{{$CATEGORY->id}}" required> 


   <div class="form-group row">
        <div class="col-sm-12">
        <label for="category_name" class="col-form-label"> Category Name </label>
            <input type="text" class="form-control" placeholder="Category Name" name="category_name" id="category_name" value="{{$CATEGORY->category_name}}" required>
        </div>
    </div>

        <div class="form-group row">
            <div class="col-sm-12">
            <label for="description" class="col-form-label"> Description </label>
                <textarea rows="2" class="form-control" placeholder="Category Description" name="description" id="description" required>{{$CATEGORY->description}}</textarea>
            </div>
        </div>  

        <div class="form-group row">
            <div class="col-sm-6">
            <label for="position" class="col-form-label"> Position </label>
                <input type="text" class="form-control" placeholder="Category Position" name="position" id="position" value="{{$CATEGORY->position}}" required>
            </div>

            <div class="col-sm-6">
            <label for="display_id" class="col-form-label"> Display </label>
                <select class="form-control" name="display_id" id="display_id" required>
                    @if($one_dis) <option value="{{$one_dis->id}}"> {{$one_dis->value}} </option> @endif
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
        <button type="submit" name="add_btn" id="add_btn" class="btn btn-primary"> <i class="fa fa-plus"></i> Update Category</button>
      </div>
</form>


</script>