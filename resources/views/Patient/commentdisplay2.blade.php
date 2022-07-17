<!DOCTYPE html>
<html>
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
        @livewireStyles()
    </head>
    <body>
        @foreach($comments as $comment)
        @php($i = 0)

        <div  class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
            <div class="comment-view-box mb-3">
                <div class="d-flex mb-2">
                    <img src="post/img/user2.jpg" alt="User img" class="author-img author-img--small mr-2">
                    <div>
                        <h6 class="mb-1"><a href="#!" class="text-dark">{{$comment->user->name}}</a> <small class="text-muted">{{$comment->created_at->diffForHumans()}}</small></h6>
                        <p class="mb-1">{{$comment->body}} {{++$i}}</p>
                        <div class="d-flex">
                            <a href="#!" class="text-dark mr-2"><span><i class="fa fa-heart-o"></i></span></a>
                            <form method="post" action="{{ url('storecomment_2') }}">
                                @csrf
                                <div class="input-group mb-0">

                                    <input style="display: none;" type="text" name="body" id="{{$comment->id}}_2" class="form-control" placeholder="Add your comment">
                                    <input type="hidden" name="post_id" value="{{ $post_id }}" />
                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                                </div>
                                <div class="input-group mb-0">

                                    <a href="#!"  onclick =
                                    "
                                        var div = document.getElementById('{{$comment->id}}_2');
                                            if (div.style.display !== 'none')
                                                div.style.display = 'none';
                                            else
                                                div.style.display = 'block';
                                    "  class="text-dark mr-2"><span>Reply</span></a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @include('Patient.commentdisplay', ['comments' => $comment->replies])
        </div>
    @endforeach
    @livewireScripts()
    <script src="../GP_Doctor/assets/js/jquery-3.2.1.min.js"></script>
	<script src="../GP_Doctor/assets/js/popper.min.js"></script>
	<script src="../GP_Doctor/assets/js/bootstrap.min.js"></script>
	<script src="../GP_Doctor/assets/js/jquery.slimscroll.js"></script>
	<script src="../GP_Doctor/assets/js/Chart.bundle.js"></script>
	<script src="../GP_Doctor/assets/js/chart.js"></script>
	<script src="../GP_Doctor/assets/js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>

