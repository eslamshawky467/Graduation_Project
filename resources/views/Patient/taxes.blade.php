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

        <h1 style="text-align: center;color:rgb(12, 116, 116);"><b>الفواتير</b></h1>

        <br>
        <table id="customers">
          <tr>
            <th>الاسم</th>
            <th>رقم البطاقة</th>
            <th>رقم الفاتورة</th>
            <th>نوع الفاتورة</th>
            <th>سعر الكشف</th>
            <th>سعر الدواء</th>
            <th>اجمالي الفاتورة</th>
            <th>حالة الفاتورة</th>
            <th>تاريخ الفاتورة</th>
          </tr>
          @foreach($taxes as $tax)
          <tr>
            <td>{{$tax->name}}</td>
            <td>{{$tax->socialid}}</td>
            <td>{{$tax->invoice_number}}</td>
            <td>{{$tax->product}}</td>
            <td>{{$tax->cash}}</td>
            <td>{{$tax->others}}</td>
            <td>{{$tax->Total}}</td>
            <td>{{$tax->Status}}</td>
            <td>{{$tax->created_at}}</td>
          </tr>
          @endforeach
          
        </table>

        <div style="margin-top: 80px"></div>
        

          
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