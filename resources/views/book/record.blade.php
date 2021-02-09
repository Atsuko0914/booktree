@extends('layouts.app')

@section('title', '本の登録')
<link href="{{ asset('css/book.css') }}" rel="stylesheet">



<!-- ここからコンテンツ -->
@section('content')
<!-- 写真 -->
<div class="eye_catch">
<img src="../images/my_library.JPG" alt="本棚の写真">
</div>
<!-- 登録内容 -->
<form action="/book/confirm" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form_item">
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title"></input>
  </div>
  <div class="form_item">
    <label for="author">著者</label>
    <input type="text" name="author"
    id="author"></input>
  </div>  
  <div class="form_item">
    <label for="purchase_date">購入日</label>
    <input type="text" name="purchase_date"
    id="purchase_date"></input>
  </div>
  <div class="form_item">
    <label for="price">価格</label>
    <input type="text" name="price"
    id="price"></input>
  </div>
  <div class="form_item">
    <label for="publication">出版社</label>
    <input type="text" name="publication"
    id="publication"></input>
  </div>
  <div class="form_item">
    <label for="issue_date">発行日</label>
    <input type="text" name="issue_date"
    id="issue_date"></input>
  </div>
  <div class="form_item">
    <label for="keyword">キーワード</label>
    <input type="text" name="keyword" id="keyword"></input>
  </div>
  <div class="form_item">
    <label for="summary">要約</label>
    <textarea name="summary" id="summary"></textarea>
  </div>
  <div class="form_file">
    <label for="book_image_pass">picture</label>
    <input type="file" name="book_image_pass"></input>
  </div>
  <div class="button_panel">
    <input type="submit" class="button" value="確認"></input>
  </div>
</form>







@endsection
