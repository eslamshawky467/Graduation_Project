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

                <br>
                <h1 style="text-align: center;color:rgb(12, 116, 116);"><b>تقرير الفحص</b></h1>
                <br>

                {{-- <h2 style=" margin-left:10px ;margin-right:20px ; background-color:lightseagreen" >Your Data </h2> --}}
                <div style="margin-left:25px" >
                    <div class="row">
                        <div class="col-xs-6 col-md-6" style="background-color:none;">

                            <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Name </div>

                        </div>
                        <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif">
                        <div style="width:84%; background-color:lavenderblush ;text-align:left" >Social ID</div>
                        </div>
                    </div>
                    <br>

                <div class="row">
                    <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">

                        <div style="text-align:center" >{{$data->name}} </div>

                    </div>
                    <div class="col-xs-6 col-md-6" style="background-color:none;">
                    <div style="text-align:center" >{{$data->socialid}}</div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-md-12" style="background-color:none;">
                        <div style="max-width:92%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, 				Times, serif" >Email
                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:0px">

                        <div style="text-align:center" > {{$data->email}}</div>

                    </div>

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-md-6" style="background-color:none;">

                        <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Age</div>

                    </div>
                    <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif">
                    <div style="width:84%; background-color:lavenderblush ;text-align:left" >Gender</div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">

                        <div style="text-align:center" >{{$data->age}}</div>

                    </div>
                    <div class="col-xs-6 col-md-6" style="background-color:none;">
                    <div style="text-align:center" >{{$data->gender}}</div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-md-6" style="background-color:none;">

                        <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Phone Number</div>

                    </div>
                    <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif">
                    <div style="width:84%; background-color:lavenderblush ;text-align:left" >Address</div>
                    </div>
                </div>

                <br>
            <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">

                    <div style="text-align:center" >{{$data->phonenumber}}</div>

                </div>
                <div class="col-xs-6 col-md-6" style="background-color:none;">
                <div style="text-align:center" >{{$data->address}}</div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-md-12" style="background-color:none;">
                    <div style="max-width:92%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, 				Times, serif" >Checkup Image
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:0px">

                    <div style="text-align:center" ><img src="/machinefolder/{{$data->imagefile}}"class=" h-1 w-1 object-cover"></div>

                </div>

            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:none;">

                    <div style="width:70%; background-color:lavenderblush ;text-align:left; font-size:25px; font-family:Times New Roman, Times, serif" >Class No</div>

                </div>
                <div class="col-xs-6 col-md-6" style="text-align:left; font-size:25px; font-family:Times New Roman, Times, serif">
                <div style="width:84%; background-color:lavenderblush ;text-align:left" >Class Name</div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-6 col-md-6" style="background-color:none;margin-left:-80px">

                    <div style="text-align:center" >{{$data->classnumber}}</div>

                </div>
                <div class="col-xs-6 col-md-6" style="background-color:none;">
                <div style="text-align:center" >{{$data->classname}}</div>
                </div>
            </div>


                </div>


              </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    @include('Doctor.doctor_footer')

    @include('Doctor.doctor_scripts')

</body>



</html>
