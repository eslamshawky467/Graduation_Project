<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../GP_Doctor/assets/img/favicon.ico">
    <title>الأخبار</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/theme.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>        <![endif]-->

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





</head>

<body>
    <div class="main-wrapper">

            <!--header-->
            @include('Doctor.doctor_header')

            <!--sidebar-->
            @include('Doctor.doctor_sidebar')

            <div class="page-wrapper">
            <div class="page-hero bg-image overlay-dark" style="background-image: url('../GP_Doctor/assets/img/bg4.jpg');">
                <div class="hero-section">
                  <div class="container text-center">

                    <h1 class="display-6">مهمتنا هي جعل حياتك صحية</h1>

                  </div>
                </div>
            </div>
            <div class="content">
              <div class="container" style="direction: rtl; margin-top: 60px;">
                <h2 style="text-align: center;color:rgb(12, 116, 116);"><b>تقارير المرضي</b></h2>
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
                          <th>Action</th>
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
                          <td><img src="machinefolder/{{$data->imagefile}}" style="width:50px"></td>
                          <td>{{$data->classnumber}}</td>
                          <td>{{$data->classname}}</td>
                          <td><a href="{{url('/docshowspeceficcheckup',$data->id)}}" class="btn-btn-success">عرض الفحص</a></td>

                        </tr>
                        @endforeach

                </table>


              </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    @include('Doctor.doctor_footer')

    @include('Doctor.doctor_scripts')

</body>



</html>
