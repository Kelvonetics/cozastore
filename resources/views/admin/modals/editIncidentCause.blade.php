<form id="" action="{{url('admin/addIncidentCause')}}" method="POST">
        {{ csrf_field() }}

          <input type="hidden" class="form-control" id="id" name="id" value="{{$IN_CAUSE->id}}" required>

        
         <div class="form-group row">
                <label for="Incident_cause_name" class="col-sm-2 col-form-label"> Incident Cause Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Incident Cause Name" name="Incident_cause_name" id="Incident_cause_name" value="{{$IN_CAUSE->Incident_cause_name}}" required>
                </div>
            </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Incident Cause </button>
        </div>
</form>


</script>