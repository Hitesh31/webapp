<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Services\CommentsService;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    private $service;

    public function __construct(CommentsService $service)
    {
        $this->service = $service;
    }

    public function  Comment(Request $request,User $user,Post $post)
    {
        $this->service->Comment($request->input('comment'),$user,$post);
    }
}
