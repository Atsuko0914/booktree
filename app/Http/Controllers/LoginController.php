<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function getLogin() {
        return view('/auth/login');
    }
    public function postLogin(Request $request) {
        $this->validate($request,[
            'email' => 'email|requierd',
            'password' => 'requierd|min3',
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => Hash::check($request->input('password'))]));
        return redirect('admin.post.index');
    }


}
