<?php 
namespace App\Repositories\Comments;
use App\Models\
    {
        Ad,
        Comment
    };


class CommentRepository implements CommentInterface {
    
    protected $Comment;
    
    public function __construct(Comment  $Comment)
    {
        $this->Comment=$Comment;
    }

    public function addComment($request)
    {
        $request->user()->comments()->create($request->all());
    }

    public function getComments($id)
    {
       
    }

    public function addReply($request)
    {
       $request->user()->comments()->create($request->all());
    }

    public function delete($id)
    {
       
    }
}
?>