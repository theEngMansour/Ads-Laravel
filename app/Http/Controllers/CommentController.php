<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Comments\CommentInterface;
class CommentController extends Controller
{
    //
    protected $comment;

    public function __construct(CommentInterface $commentRepository)
    {
        $this->comment = $commentRepository;

    }
    public function store(Request $request)
    {
        $this->comment->addComment($request); 

        return back();        
    }
    public function reply(Request $request){
        $this->comment->addReply($request);
        return back();
    }
}
