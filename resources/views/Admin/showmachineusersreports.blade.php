<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

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





<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.side')
  <main class="main-content position-relative max-height-vh-100 w-100 ms-18 ms-0   h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.Navbar')
<div class="row">
@if ($errors->any())
    <div class="error">{{ $errors->first('Name') }}</div>
@endif
<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif






            <div class="table-responsive">

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
              <th> العمليات </th>
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

          </tr>
          @endforeach

        </table>
        <br>
        <br>

        <div style="margin-top: 90px"></div>



  @include('layouts.Scripts')
  <!--   Core JS Files   -->














<script src="js/users.js"></script>
</body>
</html>
