<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        return view('/admin/post/index');
    }

    public function post(Request $request) {
        if ($file = $request->post_image_pass) {
            $fileName = time() . $file->getClientOriginalName();
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $post = new Post();
        $post->post_body = $request->post_body;
        $post->post_image_pass = $fileName;
        $user = User::where('email',$request->session()->get('email'))->first();
        $post->user_id = $user->id;
        $post->save();
        $user_name = $user->name;
        return view('/admin/post/index', compact('user_name'));
    }

    public function postShow() {
        $items = Post::All();
        return view('/admin/post/index', ['items' => $this->items]); 
    }
}

    
