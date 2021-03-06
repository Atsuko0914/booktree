<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/register.css') }}" rel="stylesheet">
  <script src="{{ asset('js/validation.js') }}"></script>
</head>
<body>
<!-- サイトロゴ -->
<header>
    <a href="{{url('/')}}">BookTree</a>  
</header>
<!-- ホーム画像 -->
  <div id="home">
<!-- 新規登録 -->
    <div class="new_login">
      <h1>新規登録</h1>
      <form action="/auth/register" method="POST" enctype="multipart/form-data" name="validation">
      @csrf
        <div class="form_item">
          <label for="name"></label>
          <input type="text" name="name" placeholder="name" value="{{old('name')}}" required></input>
        </div>
        <div class="form_item">
          <label for="email"></label>
          <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}" required></input>
          <p>{{session('error')}}</p>
        </div>
        <div class="form_item">
          <label for="password"></label>
          <input type="password" name="password" id="password"
          placeholder="Password" required></input>
        </div>
        <div class="form_item">
          <label for="confirm"></label>
          <input type="password" name="confirm"
          placeholder="Password(確認)"
          oninput="CheckPassword(this)" required></input>
        </div>
        <div class="form_file">
          <label for="user_image_pass">picture</label>
          <input type="file" name="user_image_pass" id="user_image_pass" onchange="CheckImage"></input>
        </div>
        <div class="button_panel">
          <input type="submit" class="button" value="新規登録"></input>
        </div>
      </form>
    </div>
    
    
  </div>
  
  



  <footer>
    <p><small>Powerd by Atsuko Tanaka</small></p>
  </footer>  


  


</body>
</html>