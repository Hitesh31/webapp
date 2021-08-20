<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $service;
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
    public function  postUser(User $user,Request $request)
    {
        $this->service->createPost($request->input('content'),$user);
    }
    public function fetchComments(Post $post)
    {
        $this->service->fetchComments($post);
    }
}
