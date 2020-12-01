<form id="" action="{{url('admin/addLicense')}}" method="POST">
        {{ csrf_field() }}
        

          <input type="hidden" class="form-control" id="id" name="id" value="{{$LICENSE->id}}" required>

        
            <div class="form-group row">
                <label for="Lease_name" class="col-sm-2 col-form-label"> Lease Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Lease Name" name="Lease_name" id="Lease_name" value="{{$LICENSE->Lease_name}}" required>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Company" class="col-sm-2 col-form-label"> Operator </label>
                <div class="col-sm-10">
                    <select class="form-control" name="Company" id="Company" required>
                        @if($one_ops) <option value="{{$one_ops->id}}"> {{$one_ops->company_name}}  </option> @else <option> </option> @endif
                        @if($all_ops)
                            @foreach($all_ops as $all_ops)
                                <option value="{{$all_ops->id}}"> {{$all_ops->company_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Terrain" class="col-sm-2 col-form-label"> Terrain </label>
                <div class="col-sm-10">
                    <select class="form-control" name="Terrain" id="Terrain" required>
                        @if($one_ter) <option value="{{$one_ter->id}}"> {{$one_ter->terrain_name}}  </option> @else <option> </option> @endif
                        @if($all_ter)
                            @foreach($all_ter as $all_ter)
                                <option value="{{$all_ter->id}}"> {{$all_ter->terrain_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update License </button>
        </div>
</form>


</script>