<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>اتصل بنا</title>

  <link rel="stylesheet" href="../../Front Views/assets/css/maicons.css">

  <link rel="stylesheet" href="../../Front Views/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../Front Views/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../../Front Views/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../Front Views/assets/css/theme.css">
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about us')}}">من نحن ؟</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/doctors')}}">الأطباء</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">الأخبار</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{url('call us')}}">اتصل بنا</a>
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
            <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">اتصل بنا</h1>
        <a href="../loginOrRegister.html" class="btn btn-primary">تسجيل الدخول / الأشتراك</a>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container" style="direction: rtl;">
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
            
            <input type="text" id="subject" name="message_title" class="form-control" placeholder="عنوان الرسالة..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            
            <textarea id="message" name="message" class="form-control" rows="8" placeholder="تفاصيل الرسالة.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">إرسال </button>
      </form>
    </div>
  </div>




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

<script src="../../Front Views/assets/js/google-maps.js"></script>

<script src="../../Front Views/assets/js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>