<!DOCTYPE html>
<html lang="en">
  @include('patient.patient_styles')
<style>
    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
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
  
      {{-- <div class="page-section pb-0" style="direction: rtl; background-color: white;"> --}}
        
        <br>
        <h1 style="text-align: center;color:rgb(12, 116, 116);"><b>تقارير الفحص</b></h1>

        
        <br>
        <table id="customers">
          <tr>
            <th>الاسم</th>
            <th>رقم البطاقة</th>
            <th>البريد الالكتروني</th>
            <th>العنوان</th>
            <th>السن</th>
            <th>النوع</th>
            <th>رقم التليفون</th>
            <th>صورة الفحص</th>
            <th>رقم المصنف للمرض</th>
            <th>حالة المريض</th>
            <th>Action1</th>
            <th>Action2</th>
          </tr>
          @foreach($data as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->socialid}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->age}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->phonenumber}}</td>
            <td><img src="machinefolder/{{$data->imagefile}}"></td>
            <td>{{$data->classnumber}}</td>
            <td>{{$data->classname}}</td>
            <td><a href="{{url('/deletecheckup',$data->id)}}" class="btn-btn-danger">حذف الفحص</a></td>
            <td><a href="{{url('/showspeceficcheckup',$data->id)}}" class="btn-btn-success">عرض الفحص</a></td>

          </tr>
          @endforeach
          
        </table>
        <br>
        <br>

        <div style="margin-top: 90px"></div>
        

          
    {{-- </div> <!-- .page-section --> --}}
  
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