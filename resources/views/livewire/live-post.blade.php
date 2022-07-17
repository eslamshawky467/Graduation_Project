
<div>
    <div>
        @foreach ($posts as $post)
        <div class="post-block">
            <div class="d-flex justify-content-between">
                <div class="d-flex mb-3">
                    <div class="mr-2">
                        <a href="#!" class="text-dark">
                            <img src="post/img/user1.jpg"  alt="User" class="author-img">
                        </a>
                    </div>
                    <div>
                        <h5 class="mb-0"><a href="#!" class="text-dark">{{$post->name}}</a></h5>
                        <p class="mb-0 text-muted">{{$post->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                @if(auth()->user()->usertype == 'Doctor')
                    <div class="post-block__user-options">

                        <a class="dropdown-item text-dark" href="{{url('editpost/'.$post->id)}}"><i class="fa fa-pencil mr-1"></i>Edit</a>
                            <a class="dropdown-item text-danger" href="{{url('deletpost/'.$post->id)}}"><i class="fa fa-trash mr-1"></i>Delete</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">

                        </div>
                    </div>
                @endif
            </div>

            <div class="post-block__content mb-2">
                <p>{{$post->body}}</p>
                @if ($post->image != null)
                    <img src="image_postFolder/{{$post->image}}" style="width: 100%" alt="Content img">
                @endif
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex" wire:poll>
                        @php( $postid = $post->id)
                        @php( $count = 0)
                        <p style="display: none">{{++$count}}</p>
                        <form wire:submit.prevent="like( {{ $postid }}  )") onsubmit="play()">
                            <audio  id="audio" src="..\audios\post.mp3"  ></audio>
                            @if(auth()->user()->usertype == 'Doctor')

                            @foreach ($post->post as $item)
                            @if($item->like ==1 && $item->like !=null)
    <button   type="submit" value="Add Comment"  >
        <a   href="#!"  class="text-danger mr-2">
            <span>
                <i  id="{{$postid}}"  class="fa fa-heart">
                    <p style="display: none">{{$count}}</p>
                </i>
            </span>
        </a>
    </button>

@else
<button  type="submit" value="Add Comment"  >
    <a   href="#!"  class="text-danger mr-2">
        <span>
            <i id="{{$postid}}"  class="fa fa-heart-o">
                <p style="display: none">{{$count}}</p>
            </i>
        </span>
    </a>
</button>
@endif
                            @endforeach
                            @endif






                        </form>

                        <!-- <a href="#!" style="margin-left: 7px" class="text-dark mr-2"><span> Comment</span></a> -->
                    </div>
                    {{-- <a href="#!" class="text-dark"><span>Share</span></a> --}}
                </div>
                <!-- <p class="mb-0">Liked by <a href="#!" class="text-muted font-weight-bold">John doe</a> & <a href="#!" class="text-muted font-weight-bold">25 others</a></p> -->
            </div>
            <hr>
            <div class="post-block__comments">
                <!-- Comment Input -->

                    <form wire:submit.prevent="writecomment( {{ $postid }}  )") >

                        <div class="input-group mb-3">
                            <input onkeydown='scrollDown()' wire:model.defer="commenttext" type="text" name="body" class="form-control" placeholder="Add your comment">
                            <input  wire:model.defer="post_id" type="hidden" class="form-control" name="post_id" value="{{ $post->id }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" value="Add Comment" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </form>

                <!-- Comment content -->

                <div  id="{{$post->id}}" style="display: block;"  >
                    @include('Patient.commentdisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                </div>


                <!-- More Comments -->
                <hr>
               <!-- le.display = 'none';
                            else
                                div.style.display = 'block';
                    " <a href="#!"
                onclick =
                    "
                        var div = document.getElementById('{{$post->id}}');
                            if (div.style.display !== 'none')
                                div.sty
                class="text-dark">View More comments <span class="font-weight-bold">(12)</span></a> -->
            </div>
        </div>
    @endforeach

    </div>
    <script>
        function play() {
            var audio = document.getElementById("audio");
            audio.play();
        }
        function like()
        {
            $('#button-addon2').click(function() {
            $('#button-addon2').addClass('fa fa-heart-o');
});
        }
      </script>

</div>
