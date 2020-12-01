<form id="" action="{{url('admin/addIncidentInstallation')}}" method="POST">
        {{ csrf_field() }}

          <input type="hidden" class="form-control" id="id" name="id" value="{{$IN_INSTALL->id}}" required>

        
         <div class="form-group row">
                <label for="Incident_installation_name" class="col-sm-2 col-form-label"> Incident Installation Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Incident Installation Name" name="Incident_installation_name" id="Incident_installation_name" value="{{$IN_INSTALL->Incident_installation_name}}" required>
                </div>
            </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Incident Installation </button>
        </div>
</form>


</script>