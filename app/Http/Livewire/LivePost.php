<?php

namespace App\Http\Livewire;

use App\Models\comment;
use App\Models\Like;
use App\Models\Love;
use App\Models\post;
use App\Models\Userlike;
use App\Models\Userlike2;
use Livewire\Component;

class LivePost extends Component
{

        public $posts;
        public $commenttext;
        public $post_id;
        public $parent_id;
        public function render()
        {
            
            return view('livewire.live-post');
        }
        public function writecomment($postid )
        {
            /*comment::create([
                'user_id' => auth()->user()->id,
                'body' => $this->commenttext,
                'post_id' => $this->post_id,
                'parent_id' => $this->parent_id,
    
            ]);*/
            $comment = new comment();
            $comment->body = $this->commenttext;
            $comment->post_id = $postid;
            $comment->user_id = auth()->user()->id;
            $comment->save();
            $this->reset('commenttext');
        }
        public function writecomment2($postid , $parentid)
        {
            
            $comment = new comment();
            $comment->body = $this->commenttext;
            $comment->post_id = $postid;
            $comment->parent_id = $parentid;
            $comment->user_id = auth()->user()->id;
            $comment->save();
            $this->reset('commenttext');
        }
        public function likereply($postid , $parentid)
        {
            $likereply = new Userlike2();
            $exists = Userlike2::where('user_id',auth()->user()->id)->where('post_id',$postid)->where('parent_id',$parentid)->exists();
            if($exists != null)
            {
                $exists = Userlike2::where('user_id',auth()->user()->id)->where('post_id',$postid)->where('parent_id',$parentid)->first();
                if($exists->like == '0')
                {
                    $likereply = new Userlike2();
                    $likereply->like = 1;
                    $likereply->post_id = $postid;
                    $likereply->parent_id = $parentid;
                    $likereply->user_id = auth()->user()->id;
                }
                else
                {
                    $likereply = new Userlike2();
                    $likereply->like = 0;
                    $likereply->post_id = $postid;
                    $likereply->parent_id = $parentid;
                    $likereply->user_id = auth()->user()->id;
                }
                $exists = Userlike2::where('user_id',auth()->user()->id)->where('post_id',$postid)->where('parent_id',$parentid)->delete();
            }
            else
            {
                $likereply = new Userlike2();
                $likereply->like = 1;
                $likereply->post_id = $postid;
                $likereply->parent_id = $parentid;
                $likereply->user_id = auth()->user()->id;
            }
            
            
            

            $likereply->save();
            
        }
        
        public function like($postid)
        {
            $like = new Userlike2();
            $exists = Userlike2::where('user_id',auth()->user()->id)->where('post_id',$postid)->where('parent_id',null)->exists();
            if($exists != null)
            {
                $exists = Userlike2::where('user_id',auth()->user()->id)->where('post_id',$postid)->where('parent_id',null)->first();
                if($exists->like == '0')
                {
                    $like->like = 1;
                    $like->user_id = auth()->user()->id;
                    $like->post_id = $postid;
                }
                else
                {
                    $like->like = 0;
                    $like->user_id = auth()->user()->id;
                    $like->post_id = $postid;
                }
                $exists = Userlike2::where('user_id',auth()->user()->id)->where('post_id',$postid)->where('parent_id',null)->delete();
            }
            else
            {
                $like->like = 1;
                $like->user_id = auth()->user()->id;
                $like->post_id = $postid;
            }
            
            $like->save();
            
        }
        
    
    
}
