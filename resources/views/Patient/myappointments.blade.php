<!DOCTYPE html>
<html lang="en">
  @include('patient.patient_styles')

<body>
<!-- sidebar -->
<div class="wrapper">
  <!-- Sidebar Holder -->
  @include('Patient.patient_sidebar')
  <!-- Page Content Holder -->
  <div id="content">
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('Patient.patient_header')
  
  
    @include('Patient.patient_PPM')
  
      <div class="page-section pb-0" style="direction: rtl; background-color: white;">
          <table class="table" style="margin-bottom: 200px">
              <thead class="table-light" >
                  <tr>

                      <td>اكشن</td>
                      <td>اسم المريض</td>
                      <td>الموعد</td>
                      <td>الرسالة</td>
                      <td>اسم الطبيب</td>
                      <td>وقت الحجز</td>
                      <td>حالة الحجز</td>
                      
                  </tr>
              </thead>
              @foreach ($myappointments as $item)
                  <tbody>
                      <td class="btn btn-danger" ><a href="{{url('confirmationcanceled/'.$item->id)}}" > Cancel </a></td>
                      <td>{{$item->patient_name}}</td>
                      <td>{{$item->appointment}}</td>
                      <td>{{$item->book_message}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->created_at->diffForHumans()}}</td>  
                      <td>{{$item->status}}</td>
                     
                                                                              
                  </tbody>
              @endforeach
          </table>
          
    </div> <!-- .page-section -->
  
    <!-- .page-section -->
  
    <!-- .banner-home -->
  
    @include('Patient.patient_footer')
  
  </div>
</div>
<!-- end sidebar-->
  <!-- Back to top button -->
  
  @include('Patient.patient_scripts')

</body>
</html>