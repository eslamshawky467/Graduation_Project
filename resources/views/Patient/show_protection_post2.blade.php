<!DOCTYPE html>
<html lang="en">
	@include('patient.patient_styles')
	<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

@include('Patient.patient_header')

<div class="page-hero bg-image overlay-dark" style="background-image: url('../Front Views/assets/img/bg3.jpg');">
	<div class="hero-section">
	<div class="container text-center wow zoomIn">
		<h2 style="color: rgb(56, 161, 161);">مهمتنا هي جعل حياتك صحية</h2>
		<h1 class="display-4">مرحبا بك يا عبدالبارى</h1>
		
	</div>
	</div>
</div>


<div class="bg-light" style="background-color: white;">
	<div class="page-section py-3 mt-md-n5 custom-index" style="background-color: white;">
	<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-4 py-3 py-md-0">
			<div class="card-service wow fadeInUp">
			<div class="circle-shape bg-secondary text-white">
				<span class="mai-chatbubbles-outline"></span>
			</div>
			<p>التواصل مع الأطباء</p>
			</div>
		</div>
		<div class="col-md-4 py-3 py-md-0">
			<div class="card-service wow fadeInUp">
			<div class="circle-shape bg-primary text-white">
				<span class="mai-shield-checkmark"></span>
			</div>
			<p>لحماية أفضل</p>
			</div>
		</div>
		
		</div>
	</div>
	</div> <!-- .page-section -->

	
	<div class="post-block " style="width:50%;margin-left:330px;margin-top:20px">
		<div class="d-flex justify-content-between">
			<div class="d-flex mb-3">
				<div class="mr-2">
					<a href="#!" class="text-dark">
						<img src="{{asset('post/img/user1.jpg')}}"  alt="User" class="thumbnail">
					</a>
				</div>
				<div>
					<h1 class="mb-0"><a href="#!" class="text-dark">{{$protect->title}}</a></h1>
					<p class="mb-0 text-muted">{{$protect->created_at->diffForHumans()}}</p>
				</div>
			</div>
			<div class="post-block__user-options">
				<a href="#!" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
					<a class="dropdown-item text-dark" href="{{url('editpost/'.$protect->id)}}"><i class="fa fa-pencil mr-1"></i>Edit</a>
					<a class="dropdown-item text-danger" href="{{url('deletpost/'.$protect->id)}}"><i class="fa fa-trash mr-1"></i>Delete</a>
				</div>
			</div>
			
		</div>

		<div class="post-block__content mb-2">
			<p>{{$protect->body}}</p>
			@if ($protect->image != null)
				<img src="{{asset('image_protectionFolder/'.$protect->image)}}" style="width: 100%" alt="Content img">
			@endif
		</div>
		<div class="mb-3">
			<div class="d-flex justify-content-between mb-2">
				<div class="d-flex">
					<a href="#!" class="text-danger mr-2"><span><i class="fa fa-heart"></i></span></a>
					<a href="#!" class="text-dark mr-2"><span>Comment</span></a>
				</div>
				<a href="#!" class="text-dark"><span>Share</span></a>
			</div>
			<p class="mb-0">Liked by <a href="#!" class="text-muted font-weight-bold">John doe</a> & <a href="#!" class="text-muted font-weight-bold">25 others</a></p>
		</div>
		<hr>
		
	</div>
								
<!-- .page-section -->

<!-- .banner-home -->

@include('Patient.patient_footer')

@include('Patient.patient_scripts')


</body>
</html>