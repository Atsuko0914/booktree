<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('/book/index');
    }

    public function record() {
        return view('/book/record');
    }

    

    


    public function postRecord(Request $request){
        $request->session()->put('title', $request->input('title'));
        $request->session()->put('author', $request->input('author'));
        $request->session()->put('purchase_date', $request->input('purchase_date'));
        $request->session()->put('price', $request->input('price'));
        $request->session()->put('publication', $request->input('publication'));
        $request->session()->put('issue_date', $request->input('issue_date'));
        $request->session()->put('keyword', $request->input('keyword'));
        $request->session()->put('summary', $request->input('summary'));
        $request->session()->put('book_image_pass', $request->input('book_image_pass'));

        $data = $request->session()->all();

        return view('/book/confirm', $data);
        
    }


    // public function postconfirm(Request $request) {


    //     if ($file = $request->book_image_pass) {
    //         $fileName = time() . $file->getClientOriginalName();
    //         $target_path = public_path('uploads/');
    //         $file->move($target_path, $fileName);
    //     } else {
    //         $fileName = "";
    //     }

    //     $book = new Book();
    //     $book->title = $request->title;
    //     $book->author = $request->author;
    //     $book->purchase_date = $request->purchase_date;
    //     $book->price = $request->price;$book->publication = $request->publication;$book->issue_date = $request->issue_date;$book->keyword = $request->keyword;$book->summary = $request->summary;
    //     $book->book_image_pass = $fileName;

    //     $user = User::where('email',$request->session()->get('email'))->first();
    //     $book->user_id = $user->id;
    //     $book->save();
    //     $user_name = $user->name;
    //     return view('/book/index', compact('user_name'));





    // }
}
