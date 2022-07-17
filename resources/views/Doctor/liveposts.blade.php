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
    @livewireStyles
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
								<livewire:live-post :posts="$posts">

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
    @livewireScripts
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>



</html>
