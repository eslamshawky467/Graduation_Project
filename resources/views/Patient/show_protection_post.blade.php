<!DOCTYPE html>
<html lang="en">
	@include('patient.patient_styles')

<body>
<!-- sidebar -->
<div class="wrapper">
	<!-- Sidebar Holder -->
	@include('Patient.patient_sidebar')
	<!-- Page Content Holder -->
	<div id="content">
	  <!-- Back to top button -->
	  <div class="back-to-top"></div>

	  @include('Patient.patient_header')
	  
		@include('Patient.patient_PPM')
	  
	
		<div style="margin-bottom:90%; margin-left:20%;margin-top:50px;" class="col-md-4">
          <div style="width:200%" class="card-box text-center">
		  <h4 style="text-align:left" >{{$protect->title}}</h4>

		  <p class="mb-0 text-muted">{{$protect->created_at->diffForHumans()}}</p>
            <div class="user-pic">
				@if ($protect->image != null)
					  <img src="{{asset('image_protectionFolder/'.$protect->image)}}" style="width: 100%" alt="Content img">
				@endif            
			</div>
            
            
            <hr>
            <p>{{$protect->body}}</p>
          
          </div>
        </div>
									  
	  <!-- .page-section -->
	  
	  <!-- .banner-home -->
	  
	  @include('Patient.patient_footer')
	</div>
  </div>
  <!-- end sidebar-->
<!-- Back to top button -->


@include('Patient.patient_scripts')

</body>
</html>