<!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        </ol>
        <h6 class="font-weight-bolder mb-0">لوحة التحكم الخاصة بالادمن </h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">

              </div>
            </a>
          </li>


          <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"> {{ Auth::user()->name }}</i>
            </a>





            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="{{route('profile.show')}}">
                  <div class="d-flex py-1">
                    <div class="my-auto">
                      <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="avatar avatar-sm  me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold"> {{ Auth::user()->name }}</span>
                      </h6>
                      <p class="text-xs text-secondary mb-0">
                        {{ Auth::user()->email }}
                      </p>
                    </div>
                  </div>
                </a>
              </li>


















              <li class="mb-2">
                <div class="d-flex py-1">
                    <div class="my-auto">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item border-radius-md"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"><i class="bx bx-log-out"></i>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="font-weight-bold">{{ __('Log Out') }}</span>
              </a>

            </form>
                    </div>
                </div>
              </li>

                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
