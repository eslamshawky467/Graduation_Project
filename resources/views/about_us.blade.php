<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>من نحن</title>

  <link rel="stylesheet" href="../../Front Views/assets/css/maicons.css">

  <link rel="stylesheet" href="../../Front Views/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../Front Views/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../../Front Views/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../Front Views/assets/css/theme.css">

  <link rel="stylesheet" href="../../Front Views/assets/css/about-us.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="direction: rtl;">
      <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
             
            @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <x-app-layout>

                </x-app-layout>     
                {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
            </li>
                @else
            <li class="nav-item">
                <a href="{{ route('login') }}"  class="nav-link">تسجيل الدخول</a>
            </li>
                @if (Route::has('register'))
            <li class="nav-item">    
                <a href="{{ route('register') }}" class="nav-link" >التسجيل لأول مرة </a>
            </li>
                @endif
            @endauth
    @endif


            <li class="nav-item">
              <a class="nav-link" href="/">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item  active">
              <a class="nav-link" href="{{url('/about us')}}">من نحن ؟</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/doctors')}}">الأطباء</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">الأخبار</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{('call us')}}">اتصل بنا</a>
            </li>
            <!--
              <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
              </li>
            -->
            
          </ul>
        </div> <!-- .navbar-collapse -->

        <a class="navbar-brand" href="/"><span class="text-primary">Diabetic</span>-Retinopathy</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url('../../Front Views/assets/img/bg3.jpg');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="../index.html">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page">من نحن</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">من نحن</h1>
        <a href="../loginOrRegister.html" class="btn btn-primary">تسجيل الدخول / الأشتراك</a>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../../Front Views/assets/img/about-us/ramadan.jpg" class="img-fluid" alt="User Pic">
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
              <img src="../../Front Views/assets/img/about-us/eslam.jpg" class="img-fluid" alt="User Pic">
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
              <img src="../../Front Views/assets/img/about-us/mohamady.jpg" class="img-fluid" alt="User Pic">
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
              <img src="../../Front Views/assets/img/about-us/ragabola.jpg" class="img-fluid" alt="User Pic">
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
              <img src="../../Front Views/assets/img/about-us/bary.jpeg" class="img-fluid" alt="User Pic">
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
              <img src="../../Front Views/assets/img/about-us/farahat.jpg" class="img-fluid" alt="User Pic">
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

<!-- .banner-home -->

<footer class="page-footer">
  <div class="container">
    

    <p id="copyright" style="text-align: right;">
      
      جميع الحقوق محفوظة لدى فريقنا
    </p>
  </div>
</footer>

<script src="../../Front Views/assets/js/jquery-3.5.1.min.js"></script>

<script src="../../Front Views/assets/js/bootstrap.bundle.min.js"></script>

<script src="../../Front Views/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../../Front Views/assets/vendor/wow/wow.min.js"></script>

<script src="../../Front Views/assets/js/theme.js"></script>
  
</body>
</html>