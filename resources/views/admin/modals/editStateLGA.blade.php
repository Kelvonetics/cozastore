<form id="" action="{{url('admin/addStateLGA')}}" method="POST">
        {{ csrf_field() }}
        

          <input type="hidden" class="form-control" id="id" name="id" value="{{$LGA->id}}" required>

        
            <div class="form-group row">
                <label for="LGA_name" class="col-sm-2 col-form-label"> LGA Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Local Govt Name" name="LGA_name" id="LGA_name" value="{{$LGA->LGA_name}}" required>
                </div>
            </div> 

            <div class="form-group row">
                <label for="State_id" class="col-sm-2 col-form-label"> State </label>
                <div class="col-sm-10">
                    <select class="form-control" name="State_id" id="State_id" required>
                        @if($one_lga) <option value="{{$one_lga->id}}"> {{$one_lga->state_name}}  </option> @else <option> </option> @endif
                        @if($all_lga)
                            @foreach($all_lga as $all_lga)
                                <option value="{{$all_lga->id}}"> {{$all_lga->state_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update State LGA </button>
        </div>
</form>


</script>