<form id="" action="{{url('admin/addContractorCompany')}}" method="POST">
        {{ csrf_field() }}

          <input type="hidden" class="form-control" id="id" name="id" value="{{$CONTRACTOR->id}}" required>

        
         <div class="form-group row">
                <label for="contractor_name" class="col-sm-2 col-form-label"> Contractor </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Contractor Company" name="contractor_name" id="contractor_name" value="{{$CONTRACTOR->contractor_name}}" required>
                </div>
            </div> 



       
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" name="update_btn" id="update_btn" class="btn btn-success"> <i class="fa fa-check"></i> Update Contractor </button>
        </div>
</form>


</script>