<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function getRegister() {
        return view('/auth/register');
    }
    public function postRegister(Request $request) {
        // メールアドレスに重複がないか確認

        if(User::where('email', $request->input('email'))->first()){
            return redirect('auth.register', ['error'=>'このメールアドレスは既に登録されています']);
        }
    //     if($this->user->where('email', '=', $request->input('email'))->get()){
         
    //   return redirect('/auth/register', ['error'=>'このメールアドレスは既に登録されています']);
         else {


        // バリデーション
        // $this->validate($request,[
        //     'name' => 'required',
        //     'email' => 'email|required|unique:users',
        //     'password' => 'required|min:4',
        //     'password_comform' => 'required|same:password'
        //   ]);

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

        return redirect('admin/post/index');
    }
    }

        // $data =[
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password,
        //     'user_image_pass' => $user_image_pass,
        //  ];
        
        
}
