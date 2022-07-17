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
        @php($count2 = 0)
        @php($count3 = 0)
        <div  class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
            <div class="comment-view-box mb-3">
                <div class="d-flex mb-2">
                    <img src="post/img/user2.jpg" alt="User img" class="author-img author-img--small mr-2" wire:poll>
                    <div>
                        <h6 class="mb-1" wire:poll><a href="#!" class="text-dark">{{$comment->user->name}}</a> <small class="text-muted">{{$comment->created_at->diffForHumans()}}</small></h6 >
                        <p class="mb-1" wire:poll>{{$comment->body}}</p >
                        <div class="d-flex">

                            @foreach ($comment->replies2 as $item2)

                                @if($item2->like == null && $count2 < 1 )
                                {{++$count3}}
                                    <form wire:submit.prevent="likereply( {{ $post_id }} , {{ $comment->id }})") >
                                        <button  type="submit" value="Add Comment" id="button-addon2" >
                                            <a   href="#!" class="text-danger mr-2">
                                                <span>
                                                    <i  class="fa fa-heart-o">

                                                    </i>
                                                </span>
                                            </a>
                                        </button>
                                    </form>
                                @elseif($item2->user_id == auth()->user()->id)
                                    {{++$count2}}
                                    @if ( $item2->like == 1 )
                                        <form wire:submit.prevent="likereply( {{ $post_id }} , {{ $comment->id }})") >
                                            <button  type="submit" value="Add Comment" id="button-addon2" >
                                                <a   href="#!" class="text-danger mr-2">
                                                    <span>
                                                        <i  class="fa fa-heart">

                                                        </i>
                                                    </span>
                                                </a>
                                            </button>
                                        </form>

                                    @endif

                                @endif

                            @endforeach



                            <form wire:submit.prevent="writecomment2( {{ $post_id }} , {{ $comment->id }})")>

                                <div class="input-group mb-0">

                                    <input wire:model="commenttext"  type="text" name="body" id="{{$comment->id}}_2" class="form-control" style="display: block;height:25px; min-height:15px" placeholder="Add your comment">

                                </div>
                                <div class="input-group mb-0">

                                <!--    <a href="#!"  onclick =
                                    "
                                        var div = document.getElementById('{{$comment->id}}_2');
                                            if (div.style.display !== 'none')
                                                div.style.display = 'none';
                                            else
                                                div.style.display = 'block';
                                    "  class="text-dark mr-2"><span>Reply</span></a>
                                -->

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

