<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="/Admin/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">لوحة تحكم الادمن </span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{ route('dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">لوحة تحكم الادمن </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('users.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">المستخدمين</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('medicine.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">الادوية </span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link text-white " href="{{route('reports.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">التقارير</span>
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link text-white " href="{{route('reservations.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">الحجوزات </span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white " href="{{route('protection.index')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              </div>
              <span class="nav-link-text ms-1">نصائح </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{url('/showallmachinereports')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              </div>
              <span class="nav-link-text ms-1">تقارير المرضي</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link text-white " href="{{route('order.index')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              </div>
              <span class="nav-link-text ms-1">طلبات الصيدلية </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{route('Notes.index')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              </div>
              <span class="nav-link-text ms-1">ملاحظات </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{route('Category.index')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              </div>
              <span class="nav-link-text ms-1">الاقسام</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{route('showposts.index')}}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              </div>
              <span class="nav-link-text ms-1">المنشورات والتعليقات</span>
            </a>
          </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="{{route('contacts.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">الرسائل</span>
          </a>
        </li>
  </aside>
<script>
    let w = window.location.href;
    let lin = document.querySelectorAll('.nav-link');
    lin.forEach((li)=>{
        if(li.classList.contains('active')){
            li.classList.remove('active')
            li.classList.remove('bg-gradient-primary')
        }
        if(li.href == w){
            li.classList.add('active')
            li.classList.add('bg-gradient-primary')
        }
    })
</script>