@extends('layouts.app')

@section('title', 'みんなの投稿')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<link href="{{ asset('css/modal.css') }}" rel="stylesheet">



<!-- ここからコンテンツ -->
@section('content')
<div class="index_main">
  <p>みんなの投稿</p>
  <!-- 投稿作成ボタン -->
  <div class="post_serch">
    <a class="js-modal-open" href="">＋新しい投稿</a>
    <!-- 投稿の検索 -->
    <form class="keyword_serch" action="">
        <label for="serch">キーワードで投稿を検索</label>
        <input type="text" name="serch" id="serch">
        <input type="submit" class="button" value="検索" ></input>
    </form>
  </div>
</div>
<div class="modal js-modal">
  <div class="modal_bg js-modal-close"></div>
  <div class="modal_content">
    <div class="modal_nav">
      <p>投稿を作成</p>
      <a class="js-modal-close" href="">閉じる</a>
    </div>
    <form action="">
      <textarea name="post_body" id="post_body" ></textarea>
      <div class="form_item">
        <label for="user_image_pass">画像</label>
        <input type="file" name="user_image_pass" id="user_image_pass"></input>
      </div>
      <div class="button_panel">
        <input type="submit" class="button" value="投稿">
      </div>    
    </form>
  </div><!--modal__content-->
</div><!--modal-->
<script src="{{ mix('js/modal.js') }}"></script>






@endsection

