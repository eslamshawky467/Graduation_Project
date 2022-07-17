<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/Admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/Admin/assets/img/favicon.png">
    <title>

    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Nucleo Icons -->
    <link href="/Admin/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/wizard.css" rel="stylesheet" id="bootstrap-css">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/Admin/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="/Admin/asset/css/ltr.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="/Admin/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <style>
        input {
            border: 5px solid #4195fc; /* some kind of blue border */

            /* other CSS styles */

            /* round the corners */
            -webkit-border-radius: 7px;
            -moz-border-radius: 7px;
            border-radius: 7px;


            /* make it glow! */
            -webkit-box-shadow: 2px 2px 5px #4195fc;
            -moz-box-shadow: 2px 2px 5px #4195fc;
            box-shadow: 2px 2px 5px #4195fc;}
        select {
            border: 5px solid #4195fc; /* some kind of blue border */

            /* other CSS styles */

            /* round the corners */
            -webkit-border-radius: 7px;
            -moz-border-radius: 7px;
            border-radius: 7px;


            /* make it glow! */
            -webkit-box-shadow: 2px 2px 5px #4195fc;
            -moz-box-shadow: 2px 2px 5px #4195fc;
            box-shadow: 2px 2px 5px #4195fc;}
    </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
@include('layouts.side')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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

                    @if(session()->has('Add'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('Add') }}</strong>

                            </button>
                        </div>
                    @endif



                    @if(session()->has('delete'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('delete') }}</strong>
                            </button>
                        </div>
                    @endif





                    @if(session()->has('edit'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('edit') }}</strong>
                            </button>
                        </div>
                    @endif








                    <form method="post" action="{{ route('comment.bulk_delete') }}" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="record_ids" id="record-ids">
                        <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف تعليق </button>
                    </form>
                    <br>
                    <br>
                    <img src="{{ $posts->myname->profile_photo_url }}" alt="{{ $posts->myname->name }}" class="rounded-full h-7 w-6 object-cover">
                    <br>
                    <a> By : {{ $posts->myname->name }}</a>
                    <br>
                    <br>
                    <h4> {{ $posts->body }} </h4>
                    <img src="/image_postFolder/{{$posts->image}}"class="rounded-full h-30 w-30 object-cover">
                    <p> {{ $posts->created_at->diffForHumans()}} </p>

                    <hr />
                    <h6>التعليقات</h6>

                    <hr />
                    @include('Admin.commentsDisplay', ['comments' => $posts->comments, 'post_id' => $posts->id])
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    @include('layouts.Scripts')
    <script src="js/users.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).on('change', '.checkbox', function () {
            getSelectedRecords();
        });

        // used to select all records
        $(document).on('change', '#checkboxall', function () {

            $('.checkbox').prop('checked', this.checked);
            getSelectedRecords();
        });

        function getSelectedRecords() {
            var recordIds = [];

            $.each($(".checkbox:checked"), function () {
                recordIds.push($(this).val());
            });

            $('#record-ids').val(JSON.stringify(recordIds));

            recordIds.length > 0
                ? $('#bulk-delete').attr('disabled', false)
                : $('#bulk-delete').attr('disabled', true)

        }


    </script>
</body>
</html>












