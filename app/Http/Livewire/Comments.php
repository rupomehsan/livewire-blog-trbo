<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{

    public $comment;

    public $comments;


    protected $rules=[
        "comment"=>"required"
    ];

    public function mount(){
        $allComments = Comment::orderBy("id","desc")->get();
       $this->comments = $allComments;
    }

    public function addComment(){
        $this->validate();
        Comment::create(["user_id"=>"1","comment"=>$this->comment]);
        $this->mount();
        $this->comment='';
        session()->flash('message',"Comment successfully added");
    }


    public function render()
    {
        return view('livewire.comments',['comments'=>$this->comments]);
    }
}
