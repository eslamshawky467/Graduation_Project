<!DOCTYPE html>
<html lang="en" >
	@include('patient.patient_styles')
<body style="background-color: white; ">
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

		  <div class="container" >
			  <div class="row justify-content-center" style="min-width: 100%">
				  @foreach ($posts as $post)
					  <div class="post-block " style="width:50%;margin-top:20px">
						  <div class="d-flex justify-content-between">
							  <div class="d-flex mb-3">
								  <div class="mr-2">
									  <a href="#!" class="text-dark">
										  <img src="post/img/user1.jpg"  alt="User" class="author-img">
									  </a>
								  </div>
								  <div>
									  <h5 class="mb-0"><a href="#!" class="text-dark">{{$post->name}}</a></h5>
									  <p class="mb-0 text-muted">{{$post->created_at->diffForHumans()}}</p>
								  </div>
							  </div>
							  <div class="post-block__user-options">
								  <a href="#!" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
										  aria-expanded="false">
											  <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								  </a>
								  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
									  <a class="dropdown-item text-dark" href="{{url('editpost/'.$post->id)}}"><i class="fa fa-pencil mr-1"></i>Edit</a>
									  <a class="dropdown-item text-danger" href="{{url('deletpost/'.$post->id)}}"><i class="fa fa-trash mr-1"></i>Delete</a>
								  </div>
							  </div>
							  
						  </div>
	  
						  <div class="post-block__content mb-2">
							  <p>{{$post->body}}</p>
							  @if ($post->image != null)
								  <img src="image_postFolder/{{$post->image}}" style="width: 100%" alt="Content img">
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
						  <div class="post-block__comments">
							  <!-- Comment Input -->
							  
								  <form method="post" action="{{url('storecomment')}}">
									  @csrf
									  <div class="input-group mb-3">
										  <input type="text" name="body" class="form-control" placeholder="Add your comment">
										  <input type="hidden" class="form-control" name="post_id" value="{{ $post->id }}">
										  <div class="input-group-append">
											  <button class="btn btn-primary" type="submit" value="Add Comment" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
										  </div>
									  </div>
								  </form>		
							  
							  <!-- Comment content -->
							  
							  <div id="{{$post->id}}" style="display: none;">
								  @include('Patient.commentdisplay', ['comments' => $post->comments, 'post_id' => $post->id])
							  </div>
							  
							  
							  <!-- More Comments -->
							  <hr>
							  <a href="#!" 
							  onclick =
								  "
									  var div = document.getElementById('{{$post->id}}');  
										  if (div.style.display !== 'none')   
											  div.style.display = 'none';  
										  else  
											  div.style.display = 'block';
								  "
							  class="text-dark">View More comments <span class="font-weight-bold">(12)</span></a>
						  </div>
					  </div>
				  @endforeach
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