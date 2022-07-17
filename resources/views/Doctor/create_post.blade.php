
    <!DOCTYPE html>
    <html lang="en">
    
    
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="../GP_Doctor/assets/img/favicon.ico">
        <title>الصفحة الرئيسية</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/theme.css">
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="main-wrapper">
            
            <!--header-->
        @include('Doctor.doctor_header') 
        
        <!--sidebar-->
        @include('Doctor.doctor_sidebar')
           <!------------------>
            <div class="page-wrapper">
                <div class="content">
                    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 overflow-y-scroll" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div  class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color: red" class="p-6 bg-white border-b border-gray-200">

                    <div class="container" style="margin-top: 70px">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card" style="border:1px solid #e9e9e9;border-radius:20px">
                                    <div class="card-header" style="color:#009efb; font-size:1.5rem">Create Post</div>
                                    <div class="card-body">
                                        <form method="post" action="{{ url('stor_post') }}" enctype="multipart/form-data">
                                            <div class="form-group">
                                                @csrf
                                                <label class="label">Post image: </label>
                                                
                                                <input type="file" name="image" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label class="label">Post Body: </label>
                                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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