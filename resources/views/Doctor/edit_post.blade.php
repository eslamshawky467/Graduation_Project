
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
            <meta charset="UTF-8">
            <title>Social Media Post UI Design</title>
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="post/css/style.css">
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
                                <div class="card">
                                    <div class="card-header">Create Post</div>
                                    <div class="card-body">
                                        <form method="post" action="{{ url('editstorepost/'.$post->id) }}" enctype="multipart/form-data">
                                            <div class="form-group">
                                                @csrf
                                                <label class="label">Post image: </label>
                                                <input type="file" name="image" class="form-control" />
                                                <!-- @if ($post->image != null)
												    <img src="{{asset('image_postFolder/$post->image')}}" style="width: 100%" alt="Content img">
											    @endif -->
                                            </div>
                                            <div class="form-group">
                                                <label class="label">Post Body: </label>
                                                <textarea  name="body" rows="10" cols="30" class="form-control" required>{{$post->body}}</textarea>
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
    


        <script src="../GP_Doctor/assets/js/jquery-3.2.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    </body>
    
    
    
    </html>