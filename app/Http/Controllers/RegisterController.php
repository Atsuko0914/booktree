<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('auth.register');
    }
    public function postRegister(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $user_image_pass = $request->user_image_pass;

        $data =[
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'user_image_pass' => $user_image_pass,
         ];
        return view('admin/post/index', $data);
        }
}
