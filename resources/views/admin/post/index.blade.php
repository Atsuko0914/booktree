@extends('layouts.app')

@section('title', 'みんなの投稿')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">

@section('content')
<div class="post_serch">
  <p>みんなの投稿</p>
  <div>
    <a href="">＋新しい投稿</a>
    キーワードで投稿を検索
    <form action="">
    <input type="serch" name="serch">検索</input>
    </form>
  </div>
</div>

@endsection