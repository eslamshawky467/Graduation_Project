<?php

namespace App\Http\Livewire;

use App\Models\co;
use Illuminate\Http\Request;
use Livewire\Component;

class Comment extends Component
{
    public $posts;
    public $commenttext;
    public $post_id;
    public $parent_id;
    public function render()
    {
        
        return view('livewire.comment');
    }
    public function writecomment()
    {
        Comment::create([
            'user_id' => auth()->user()->id,
            'body' => $this->commenttext,
            'post_id' => $this->post_id,
            'parent_id' => $this->parent_id,

        ]);
        /*$comment = new comment();
        $comment->body = $this->commenttext;
        $comment->post_id = $this->post_id;
        $comment->parent_id = $this->parent_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();*/
        $this->reset('commenttext');
    }
    
}
