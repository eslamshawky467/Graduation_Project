<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" type="image/x-icon" href="../GP_Doctor/assets/img/favicon.ico">
	<title>الصفحة الرئيسية</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/theme.css">
	<meta charset="UTF-8">
	<title>Social Media Post UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="post/css/style.css">
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div class="main-wrapper">
		 <!--header-->
		 @include('Doctor.doctor_header') 
        
		 <!--sidebar-->
		 @include('Doctor.doctor_sidebar')
 


		<div class="page-wrapper">
			<div class="content">
				<section class="main-content">
					<div class="container">
						<h1 class="text-center text-uppercase">Social Media Post</h1>
						<br>
						<div class="row">
							<div class="col-sm-6 offset-sm-3">
								@foreach ($posts as $post)
									<div class="post-block">
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
					</div>
				</section>
			</div>
			
		</div>
	</div>
	<div class="sidebar-overlay" data-reff=""></div>
	@include('Doctor.doctor_footer')
   
    @include('Doctor.doctor_scripts')
    

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>



</html>