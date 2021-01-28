@extends('layouts.app')

@section('title', 'コメント')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<link href="{{ asset('css/modal.css') }}" rel="stylesheet">



<!-- ここからコンテンツ -->
@section('content')
<div class="show_main">
  <p>投稿記事の詳細</p>
  <!-- コメント作成ボタン -->
  <div class="comment_button">
    <a class="js-modal-open" href="">＋コメントする</a>
  </div>
</div>
<div class="modal js-modal">
  <div class="modal_bg js-modal-close"></div>
  <div class="modal_content">
    <div class="modal_nav">
      <p>コメントを作成</p>
      <a class="js-modal-close" href="">閉じる</a>
    </div>
    <form action="">
      <textarea name="comment_body" id="comment_body" ></textarea>
      <div class="button_panel">
        <input type="submit" class="button" value="投稿">
      </div>    
    </form>
  </div><!--modal__content-->
</div><!--modal-->
<script src="{{ mix('js/modal.js') }}"></script>
</body>





@endsection