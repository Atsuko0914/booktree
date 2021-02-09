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

        if ($file = $request->book_image_pass) {
                $fileName = time() . $file->getClientOriginalName();
                $target_path = public_path('uploads/');
                $file->move($target_path, $fileName);
            } else {
                $fileName = "";
            }

        $request->session()->put('title', $request->input('title'));
        $request->session()->put('author', $request->input('author'));
        $request->session()->put('purchase_date', $request->input('purchase_date'));
        $request->session()->put('price', $request->input('price'));
        $request->session()->put('publication', $request->input('publication'));
        $request->session()->put('issue_date', $request->input('issue_date'));
        $request->session()->put('keyword', $request->input('keyword'));
        $request->session()->put('summary', $request->input('summary'));
        $request->session()->put('book_image_pass', $fileName);
        

        $data = $request->session()->all();

        return view('/book/confirm', $data);
        
    }


    public function postConfirm(Request $request) {
        $book = new Book();
        $book->title = $request->session()->get('title');
        $book->author = $request->session()->get('author');
        $book->purchase_date = $request->session()->get('purchase_date');
        $book->price = $request->session()->get('price');
        $book->publication = $request->session()->get('publication');
        $book->issue_date = $request->session()->get('issue_date');
        $book->keyword = $request->session()->get('keyword');
        $book->summary = $request->session()->get('summary');
        $book->book_image_pass = $request->session()->get('book_image_pass');

        $user = User::where('email',$request->session()->get('email'))->first();
        $book->user_id = $user->id;
        $book->save();

        return view('/book/index');





    }
}
