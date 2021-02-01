<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getRegister() {
        return view('/auth/register', ['error' => '']);
    }
    public function postRegister(Request $request) {
        // メールアドレスに重複がないか確認
        $emails = User::select('email')->get();
        foreach ($emails as $key => $email){
        if ($email === $request->email) {
        return view('/auth/register', ['error'=>'このメールアドレスは既に登録されています']);
            } 
        }
        // 画像をアップロード
        if ($file = $request->file('user_image_pass')) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }
        
        // modelを新規作成
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_image_pass = $request->$fileName;
        $user->save();

        return view('admin/post/index');
        
    }

        // $data =[
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password,
        //     'user_image_pass' => $user_image_pass,
        //  ];
        
        
}
