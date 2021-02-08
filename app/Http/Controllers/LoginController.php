<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getLogin() {
        return view('/auth/login',
        ['error' => '']);
    }
    public function postLogin(Request $request) {

    if($user = User::where('email',$request->input('email'))->first()){
        if(Hash::check($request->input('password'), $user->password)) {
            $request->session()->put('email', $request->input('email'));
            $user_name = $user->name;
        
            return view('admin/post/index', compact('user_name'));
           
            
        
    } else {
        return view('auth/login',['error' => 'パスワードが間違っています。']);
    }
    }
   }
  

   

}
