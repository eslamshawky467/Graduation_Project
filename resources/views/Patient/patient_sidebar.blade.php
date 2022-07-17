<nav id="sidebar" style="border:1px solid #e9e9e9">
    <a class="navbar-brand w-100 bg-opacity-10" style="background-color: #f3f3f3;padding: 1.29rem;" href="Home.html"><span class="text-primary">Diabetic</span>-Retinopathy</a>

</hr>
    <ul class="list-unstyled components p-0 border-0 my-4">

      <li>
        <a href="{{url('/testmachine')}}">إجراء فحص</a>
      </li>
      <li>
        <a href="{{url('/generatedreport')}}">التقارير</a>
      </li>

      <li>
        <a href="{{url('/patienttaxes')}}">الفواتير</a>
      </li>
      <!-- <li>
        <a href="account-settings.html">الاعدادات</a>
      </li> -->
      <li>
        <a href="{{ route('Notes.create') }}">اشعارات هامة </a>
      </li>
      <li >
        <a  href="{{url('patientappointments')}}">حجوزاتى</a>
      </li>
    </ul>


  </nav>
