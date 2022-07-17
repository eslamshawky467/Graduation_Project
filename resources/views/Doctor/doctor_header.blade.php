<div class="header">
    <div class="header-left">
        <a href="{{url('/doctordashboard')}}" class="logo">
            <img src="../GP_Doctor/assets/img/logo.png" width="35" height="35" alt=""> <span>Diabetic-Retionpathy</span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.show') }}"> الملف الشخصي</a>
        </li>


            <li class="nav-item">
                <a class="nav-link" href="{{url('/livepost')}}">المنشورات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/myappointments')}}">مواعيدى</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/doctorcontact')}}">اتصل بنا</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/doctoraboutus')}}">من نحن ؟</a>
            </li>
            <li class="nav-item active" style="background: #07507a">
                <a class="nav-link" href="{{url('/doctordashboard')}}">الصفحة الرئيسية</a>
            </li>



    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">

            <a class="dropdown-item" href="{{url('/doctordashboard')}}">الصفحة الرئيسية</a>
            <a class="dropdown-item" href="{{url('/doctoraboutus')}}">من نحن؟</a>
            <a class="dropdown-item" href="{{url('/call us')}}">اتصل بنا</a>
            <a class="dropdown-item" href="{{url('/all_post')}}">الأخبار</a>

        </div>
    </div>
</div>
