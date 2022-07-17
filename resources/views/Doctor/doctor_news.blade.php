<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../GP_Doctor/assets/img/favicon.ico">
    <title>الأخبار</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/theme.css">
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
            <div class="page-hero bg-image overlay-dark" style="background-image: url('../GP_Doctor/assets/img/bg4.jpg');">
                <div class="hero-section">
                  <div class="container text-center">
                    
                    <h1 class="display-6">مهمتنا هي جعل حياتك صحية</h1>
                
                  </div>
                </div>
            </div>
            <div class="content">
              <div class="container" style="direction: rtl; margin-top: 60px;">
                <h1 class="text-center wow fadeInUp"> Under Maintenance </h1>
          
                
              </div>
            </div>
            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    
    @include('Doctor.doctor_footer')
   
    @include('Doctor.doctor_scripts')
    


</body>



</html>