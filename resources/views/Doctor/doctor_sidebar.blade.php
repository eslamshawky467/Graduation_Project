<div class="sidebar" id="sidebar" style="border:1px solid #e9e9e9">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu side-B">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{url('/doctordashboard')}}"><i class="fa fa-dashboard"></i> <span>الصفحة الرئيسية</span></a>
                </li>
                <li>
                    <a href="{{url('create_post')}}"><i class="fa fa-calendar"></i> <span>أنشاء منشور</span></a>
                </li>
                <li class="active">
                  <a href="{{url('/doctorreports')}}"><i class="fa fa-flag-o"></i> <span>تقارير المرضي</span></a>
                </li>
                <li>
                    <a href="{{ route('Pharmacym.index') }}"><i class="fa fa-flag-o"></i> <span>الادوية</span></a>
                </li>
                  
                <li>
                  <a href="{{url('chatwithpatient')}}"><i class="fa fa-commenting-o"></i> <span>التواصل مع المرضى</span></a>
                </li>
                <br>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a  href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                      this.closest('form').submit();">
                                       <i class="fa fa-flag-o"></i>  <span> تسجيل الخروج </span>
                    </a>

                  </form>
                  </li>
            </ul>
        </div>
    </div>
</div>
<script>
    let w = window.location.href;
    let lin = document.querySelectorAll('.side-B ul li');
    console.log(lin)
    lin.forEach((li)=>{
        console.log(li.firstElementChild)
        if(li.classList.contains('active')){
            li.classList.remove('active')
        }
        if(li.firstElementChild.href == w){
            li.classList.add('active')
        }
    })
</script>