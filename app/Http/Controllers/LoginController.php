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

    if($email = User::where('email',$request->input('email'))->first()){
        if(Hash::check($request->input('password'), $email->password)) {
            $request->session()->put('email', $request->input('email'));
            //$user_name =$email->name;
            //dd($email->name);
            return redirect('/admin/post');
            //return view('admin/post/index',compact('user_name'));
           
            
        
    } else {
        return view('/auth/login',['error' => 'パスワードが間違っています。']);
    }
    }
   }
  
   public function index(Request $request) {
    $user_email = $request->session()->get('email');
    $record_user = User::where('email', $user_email)->first();  //51行目の書き方悪い。
    //dd($record_user);
    $user_name = $record_user->name;
    //dd($user_name);
    return view ('admin/post/index', compact('user_name'));
}

   

}
