<?php
namespace App\Services;

use App\Models\Post;

class PostService {
    public function createPost($content,$user)
    {
        $post = new Post;
        $post->content=$content;
        $user->post()->save($post);
        echo "posted";
        return $post;
    }
    public function fetchComments($post)
    {
        $comments = $post->comments;
        echo $comments;
    }
}
