<form id="" action="{{url('admin/addIncidentResult')}}" method="POST">
        {{ csrf_field() }}

          <input type="hidden" class="form-control" id="id" name="id" value="{{$IN_RESULT->id}}" required>

        
         <div class="form-group row">
              <label for="Incident_result_name" class="col-sm-2 col-form-label"> Incident Result Name </label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Incident Result Name" name="Incident_result_name" id="Incident_result_name" value="{{$IN_RESULT->Incident_result_name}}" required>
              </div>
          </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Incident Result </button>
        </div>
</form>


</script>