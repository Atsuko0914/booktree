<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;




class LoginController extends Controller
{
    public function getLogin() {
        return view('/auth/login',
        ['error' => '']);
    }
    public function postLogin(Request $request) {
        // $this->validate($request,[
        //     'email' => 'email|requierd',
        //     'password' => 'requierd|min3',
        // ]);

    //    if($email[] = User::where('email',$request->input('email'))->first()){
    //     if(Hash::check($request->input('password'), $email[0]->password)) {
    //         return redirect('/admin/post');
    //     } else {
    //         return redirect('/auth/login');
    //     }
    // }

    if($email[] = User::where('email',$request->input('email'))->first()){
        if(Hash::check($request->input('password'), $email[0]->password)) {
            return redirect('/admin/post');
        
    } else {
        return view('/auth/login',['error' => 'パスワードが間違っています。']);
    }
    }
   






           
        
        



        
        
    


}
}
