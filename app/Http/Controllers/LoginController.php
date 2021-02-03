<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;



class LoginController extends Controller
{
    public function getLogin() {
        return view('/auth/login');
    }
    public function postLogin(Request $request) {
        // $this->validate($request,[
        //     'email' => 'email|requierd',
        //     'password' => 'requierd|min3',
        // ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect('/admin/post');
            }
        // if(User::where('email', $request->input('email')->first())
        // && User::where('password', Hash::check('password',$request->input('email')->first()))) {
        //     return redirect('/admin/post');
        // }
            
        
    }


}
