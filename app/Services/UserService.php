<?php
namespace App\Services;

use App\Models\User;

class UserService {

    public function createUser($email, $username)
    {
        $user = new User;
        $user->username = $username;
        $user->email= $email;
        $user->save();
        echo "user create successfully";
        return response()->Json(["status"=>"user created successfully"]);
    }
    public function fetchPosts($user)
    {
       // echo $user;
        $posts = $user->post;
        echo $posts;
    }
}
