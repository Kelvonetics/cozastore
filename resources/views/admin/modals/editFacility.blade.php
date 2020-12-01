<form id="" action="{{url('admin/addFacility')}}" method="POST">
        {{ csrf_field() }}

          <input type="hidden" class="form-control" id="id" name="id" value="{{$FACILITY->id}}" required>

        
         <div class="form-group row">
                <label for="Facility_name" class="col-sm-2 col-form-label"> Facility Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Facility Name" name="Facility_name" id="Facility_name" value="{{$FACILITY->id}}" required>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Facility_type" class="col-sm-2 col-form-label"> Facility Type </label>
                <div class="col-sm-10">
                   <select class="form-control" name="Facility_type" id="Facility_type" required>
                        @if($one_fac) <option value="{{$one_fac->id}}"> {{$one_fac->facility_type_name}}  </option> @else <option> </option> @endif
                        @if($all_fac)
                            @foreach($all_fac as $all_fac)
                                <option value="{{$all_fac->id}}"> {{$all_fac->facility_type_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label for="Company" class="col-sm-2 col-form-label"> Company </label>
                <div class="col-sm-10">
                   <select class="form-control" name="Company" id="Company" required>
                        @if($one_com) <option value="{{$one_com->id}}"> {{$one_com->company_name}}  </option> @else <option> </option> @endif
                        @if($all_com)
                            @foreach($all_com as $all_com)
                                <option value="{{$all_com->id}}"> {{$all_com->company_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>



            <div class="form-group row">
                <label for="Field" class="col-sm-2 col-form-label"> Field </label>
                <div class="col-sm-10">
                   <select class="form-control" name="Field" id="Field" required>
                        @if($one_fie) <option value="{{$one_fie->id}}"> {{$one_fie->Field_name}}  </option> @else <option> </option> @endif
                        @if($all_fie)
                            @foreach($all_fie as $all_fie)
                                <option value="{{$all_fie->id}}"> {{$all_fie->Field_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>



            <div class="form-group row">
                <label for="LGA" class="col-sm-2 col-form-label"> LGA </label>
                <div class="col-sm-10">
                   <select class="form-control" name="LGA" id="LGA" required>
                        @if($one_lga) <option value="{{$one_lga->id}}"> {{$one_lga->LGA_name}}  </option> @else <option> </option> @endif
                        @if($all_lga)
                            @foreach($all_lga as $all_lga)
                                <option value="{{$all_lga->id}}"> {{$all_lga->LGA_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Facility </button>
        </div>
</form>


</script>