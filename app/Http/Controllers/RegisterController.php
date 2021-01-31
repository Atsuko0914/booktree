<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('auth.register');
    }
    public function postRegister(Request $request) {
        //dump($request);

        //メールアドレスが登録されているかチェック
        //DBにメールアドレスが登録されている場合は、エラー処理

        //DBにメールアドレスが登録されていない場合は、新規登録
        //modelを新規作成
        $user = new User();
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password = $request->password;
        $user->user_image_pass = $request->user_image_pass;
        $user->save();

        /*$name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $user_image_pass = $request->user_image_pass;

        $data =[
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'user_image_pass' => $user_image_pass,
         ];*/

        //return view('admin/post/index', $data);
        return view('admin/post/index');
        }
}
