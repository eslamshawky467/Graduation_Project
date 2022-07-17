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


              {{-- <li class="nav-item active">
                <a class="nav-link" href="{{url('/patient-dashboard')}}">الصفحة الرئيسية</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{url('/patient-about-us')}}">من نحن ؟</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/patient-doctors')}}">الأطباء</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/patient_livepost')}}">المنشورات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('patientappointments')}}">الأخبار</a>
              </li>
              <li class="nav-item  ">
                <a class="nav-link" href="{{url('patient-call-us')}}">اتصل بنا</a>
              </li>




            <!--
              <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
              </li>
            -->

          </ul>
        </div> <!-- .navbar-collapse -->



        <!--Side-->
        <button type="button" id="sidebarCollapse" class="navbar-btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
        <!--side-->



      </div> <!-- .container -->
    </nav>
  </header>
