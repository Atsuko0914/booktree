<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/register.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<!-- サイトロゴ -->
<header>
    <a href="">BookTree</a>  
</header>
<!-- ホーム画像 -->
  <div id="home">
<!-- 新規登録 -->
    <div class="new_login">
      <h1>新規登録</h1>
      <form>
        <div class="form_item">
          <label for="name"></label>
          <input type="name" name="name" placeholder="name"></input>
        </div>
        <div class="form_item">
          <label for="email"></label>
          <input type="email" name="email" placeholder="Email Address"></input>
        </div>
        <div class="form_item">
          <label for="password"></label>
          <input type="password" name="password"
          placeholder="Password"></input>
        </div>
        <div class="form_item">
          <label for="password_comform"></label>
          <input type="password" name="password_comform"
          placeholder="Password(確認)"></input>
        </div>
        <div class="form_file">
          <label for="user_image_pass">picture</label>
          <input type="file" name="user_image_pass"></input>
        </div>
        <div class="button_panel">
          <input type="submit" class="button" value="ログイン"></input>
        </div>
      </form>
    </div>
      
    
  </div>
  
  



  <footer>
    <p><small>Powerd by Atsuko Tanaka</small></p>
  </footer>  


  


</body>
</html>