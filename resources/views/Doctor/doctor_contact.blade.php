<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../GP_Doctor/assets/img/favicon.ico">
    <title>اتصل بنا</title>
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
        </div> <!-- .page-banner -->
            <div class="content">
              <div class="container" style="direction: rtl; margin-top: 60px;">
                <h1 class="text-center wow fadeInUp"> ابقى على اتصال بنا</h1>
          
                <form class="contact-form mt-5" method="POST" action="{{url('contact')}}">
                  @csrf
                  <div class="row mb-3">
                    <div class="col-sm-6 py-2 wow fadeInLeft">
                      
                      <input type="text" id="fullName" name="name" class="form-control" placeholder="الأسم بالكامل..">
                    </div>
                    <div class="col-sm-6 py-2 wow fadeInRight">
                      
                      <input type="text" id="emailAddress" name="email" class="form-control" placeholder="البريد الألكتروني..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                      
                      <input type="text" id="subject" name="subject" class="form-control" placeholder="عنوان الرسالة..">
                    </div>
                    <div class="col-12 py-2 wow fadeInUp">
                      
                      <textarea name="msg" id="message" class="form-control" rows="8" placeholder="تفاصيل الرسالة.."></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary wow zoomIn">إرسال </button>
                </form>
              </div>
            </div>
            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    
    @include('Doctor.doctor_footer')
   
    @include('Doctor.doctor_scripts')

</body>



</html>