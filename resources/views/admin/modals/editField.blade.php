<form id="" action="{{url('admin/addField')}}" method="POST">
        {{ csrf_field() }}
        <?php 
            $one_lic = \App\Producing_License::where('id', $FIELD->License_Id)->first();     $all_lic = \App\Producing_License::orderBy('Lease_name', 'asc')->get(); 
            $one_fty = \App\Field_Type::where('id', $FIELD->Field_type)->first();     $all_fty = \App\Field_Type::orderBy('Field_type_name', 'asc')->get(); 
        ?>

          <input type="hidden" class="form-control" id="id" name="id" value="{{$FIELD->id}}" required>

        
         <div class="form-group row">
                <label for="Field_name" class="col-sm-2 col-form-label"> Field Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Field Name" name="Field_name" id="Field_name" value="{{$FIELD->Field_name}}" required>
                </div>
            </div> 

            <div class="form-group row">
                <label for="License_Id" class="col-sm-2 col-form-label"> License </label>
                <div class="col-sm-10">
                   <select class="form-control" name="License_Id" id="License_Id" required>
                        @if($one_lic) <option value="{{$one_lic->id}}"> {{$one_lic->Lease_name}}  </option> @else <option> </option> @endif
                        @if($all_lic)
                            @foreach($all_lic as $all_lic)
                                <option value="{{$all_lic->id}}"> {{$all_lic->Lease_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label for="Field_type" class="col-sm-2 col-form-label"> Field Type </label>
                <div class="col-sm-10">
                   <select class="form-control" name="Field_type" id="Field_type" required>
                        @if($one_fty) <option value="{{$one_fty->id}}"> {{$one_fty->Field_type_name}}  </option> @else <option> </option> @endif
                        @if($all_fty)
                            @foreach($all_fty as $all_fty)
                                <option value="{{$all_fty->id}}"> {{$all_fty->Field_type_name}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Field </button>
        </div>
</form>


</script>