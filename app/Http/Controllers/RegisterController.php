<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('auth.register');
    }
    public function postRegister(Request $request) {

        // modelを新規作成
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;$user->password = $request->password;$user->user_image_pass = $request->user_image_pass;
        $user->save();

        // $data =[
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password,
        //     'user_image_pass' => $user_image_pass,
        //  ];
        return view('admin/post/index');
        }
}
