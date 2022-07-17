<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../GP_Doctor/assets/img/favicon.ico">
    <title>من نحن</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/about-us.css">
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
            <div class="content" style="margin: auto 10px">
              <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                <h2 class="text-center">فريق الخبراء لدينا</h2>
                <p class="text-center">نحن طلاب من جامعة حلوان ، كلية الحاسبات والذكاء الاصطناعي</p>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-4">
                  <div class="card-box text-center">
                    <div class="user-pic">
                      <img src="../GP_Doctor/assets/img/about-us/ramadan.jpg" class="img-fluid" alt="User Pic">
                    </div>
                    <h4>Abd El-Rahman Ramadan</h4>
                    <h6>Backend Developer</h6>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <!--
                    <hr>
                    <a href="#" class="btn btn-primary">Know More</a>
                    -->
                    
                  </div>
                </div>
        
                <div class="col-md-4">
                  <div class="card-box text-center">
                    <div class="user-pic">
                      <img src="../GP_Doctor/assets/img/about-us/eslam.jpg" class="img-fluid" alt="User Pic">
                    </div>
                    <h4>Eslam Shawky</h4>
                    <h6>Backend Developer</h6>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    
                  </div>
                </div>
        
                <div class="col-md-4">
                  <div class="card-box text-center">
                    <div class="user-pic">
                      <img src="../GP_Doctor/assets/img/about-us/mohamady.jpg" class="img-fluid" alt="User Pic">
                    </div>
                    <h4>Eslam Mohammady</h4>
                    <h6>Backend Developer</h6>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                  
                  </div>
                </div>
        
                <div class="col-md-4">
                  <div class="card-box text-center">
                    <div class="user-pic">
                      <img src="../GP_Doctor/assets/img/about-us/ragabola.jpg" class="img-fluid" alt="User Pic">
                    </div>
                    <h4>Abd El-Rahman Ragab</h4>
                    <h6>Data Analyst</h6>
                    <hr>
                    <p>I'm a curious data enthusiast who loves to code. Ever since i got introduced to programming, i have been obsessed with using code to solve problems or create scripts for tasks.</p>
                    
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-box text-center">
                    <div class="user-pic">
                      <img src="../GP_Doctor/assets/img/about-us/bary.jpeg" class="img-fluid" alt="User Pic">
                    </div>
                    <h4>Abd El-Bary Nasser</h4>
                    <h6>QA Engineer</h6>
                    <hr>
                    <p>Finding bugs is not only a job for me, but iy's also my favorite hobby;
                      Delivering the software as high quality as possible is my highest priority.</p>
                      <span>Bug Hunter</span>
              
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-box text-center">
                    <div class="user-pic">
                      <img src="../GP_Doctor/assets/img/about-us/farahat.jpg" class="img-fluid" alt="User Pic">
                    </div>
                    <h4>Ahmed Farahat</h4>
                    <h6>Front End Developer</h6>
                    <hr>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                  </div>
                </div>
        
                
              </div>
            </div>
            
        </div>
    </div>
    
    <div class="sidebar-overlay" data-reff=""></div>

    @include('Doctor.doctor_footer')
   
    @include('Doctor.doctor_scripts')
    

</body>



</html>