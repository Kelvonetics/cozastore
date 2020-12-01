<form id="" action="{{url('admin/addIncidentClassification')}}" method="POST">
        {{ csrf_field() }}

          <input type="hidden" class="form-control" id="id" name="id" value="{{$IN_CLASS->id}}" required>

        
         <div class="form-group row">
                <label for="Incident_classification_name" class="col-sm-2 col-form-label"> Incident Classification Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Incident Classification Name" name="Incident_classification_name" id="Incident_classification_name" value="{{$IN_CLASS->Incident_classification_name}}" required>
                </div>
            </div> 


       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Incident Classification </button>
        </div>
</form>


</script>