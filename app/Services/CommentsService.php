<?php
namespace App\Services;

use App\Models\Comments;
class CommentsService {
    public function Comment($comment,$user,$post)
    {
        $comment1 = new Comments;
        $comment1->comment = $comment;
        $comment1->user_id=$user->id;
        $post->comments()->save($comment1);
        echo "commented";
        return $comment1;
    }
}
