@extends('layouts.appnomenu')

@section('content')



<div class="row card m-b-30" style="min-height: 732px">
    <div class="card-body">
    	<center>
	        <div class="col-md-6">
	        	<span style="color: #DE5D83; font-size: 36px"> Unauthorized Access </span> <br>
	        	<a href="{{route('dashboard')}}" name="add_tsp_btn" id="add_tsp_btn" class="btn btn-primary"> <i class="fa fa-chevron-left"></i> Dashboard </a>
	        </div>



                <!-- Footer -->
                <footer class="" style="background-color: #fff; margin-top: 30%">
                    <div class="row">
                        <div class="col-12">
                            © {{ date('Y') }} DDX -  <i class="mdi mdi-power text-danger"></i> by Snapnet.
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
	    </center>

    </div>
</div>



@endsection