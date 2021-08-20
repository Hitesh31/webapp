<?php

namespace App\Http\Controllers;

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
//        $name = $request->input('email');
//        echo $request;
//        echo $name;
        $this->service->createUser($request->input('username'), $request->input('email'));
    }

}
