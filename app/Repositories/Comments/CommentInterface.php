<?php

namespace App\Repositories\Comments;
interface CommentInterface
{
    
    public function addComment($request);

    public function getComments($id);

    public function addReply($request);

    public function delete($id);
}



?>