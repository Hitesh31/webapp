<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller {

    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function  createUser(Request $request)
    {
        $this->service->createUser($request->input('username'), $request->input('email'));
    }
    public function fetchPosts(User $user)
    {
        $this->service->fetchPosts($user);
    }
}
