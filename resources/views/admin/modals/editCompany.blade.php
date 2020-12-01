<form id="" action="{{url('admin/addCompany')}}" method="POST">
        {{ csrf_field() }}
        

          <input type="hidden" class="form-control" id="id" name="id" value="{{$COMPANY->id}}" required>

        
         <div class="form-group row">
                <label for="company_name" class="col-sm-1 col-form-label"> Company </label>
                <div class="col-sm-11">
                    <textarea rows="2" class="form-control" placeholder="Company Full Name" name="company_name" id="company_name" required>{{$COMPANY->company_name}}</textarea>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Company" class="col-sm-1 col-form-label"> Prefix </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Company Prefix" name="Company" id="Company" value="{{$COMPANY->Company}}" required>
                </div>

                <label for="Qualification" class="col-sm-1 col-form-label"> Qualification </label>
                <div class="col-sm-5">
                    <select class="form-control" name="Qualification" id="Qualification" required>
                        @if($one_qua) <option value="{{$one_qua->id}}"> {{$one_qua->Qualification}}  </option> @else <option> </option> @endif
                        @if($all_qua)
                            @foreach($all_qua as $all_qua)
                                <option value="{{$all_qua->id}}"> {{$all_qua->Qualification}} </option>                           
                            @endforeach
                        @endif
                    </select>
                </div>
            </div> 

            <div class="form-group row">
                <label for="Operation" class="col-sm-1 col-form-label"> Operation </label>
                <div class="col-sm-5">
                    <select class="form-control" name="Operation" id="Operation" required>
                        @if($COMPANY) <option value="{{$COMPANY->Operation}}"> {{$COMPANY->Operation}}  </option> @else <option> </option> @endif
                        <option value=""> Select Operation </option>
                        <option value="Downstream"> Downstream </option>
                        <option value="Upstream"> Upstream </option>
                    </select>
                </div>

                <label for="State_Id" class="col-sm-1 col-form-label"> State </label>
                <div class="col-sm-5">
                    <select class="form-control" name="State_Id" id="State_Id" required>
                        @if($one_sta) <option value="{{$one_sta->id}}"> {{$one_sta->state_name}}  </option> @else <option> </option> @endif
                        @if($all_sta)
                            @foreach($all_sta as $all_sta)
                                <option value="{{$all_sta->id}}"> {{$all_sta->state_name}} </option>                           
                            @endforeach
                        @endif
                    </select>                    
                </div>
            </div> 

            <div class="form-group row">
                <label for="Address" class="col-sm-1 col-form-label"> Address </label>
                <div class="col-sm-11">
                    <textarea rows="2" class="form-control" placeholder="Address" name="Address" id="Address" required>{{$COMPANY->Address}}</textarea>
                </div>
            </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Company </button>
        </div>
</form>


</script>