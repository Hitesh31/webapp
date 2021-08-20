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
        echo "reached here";
        return response()->Json(["status"=>"user created successfully"]);
    }
}
