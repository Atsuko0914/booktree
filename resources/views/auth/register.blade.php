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
      <form action="/auth/register" method="POST" enctype="multipart/form-data">
      @csrf
      @error('name')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror
        <div class="form_item">
          <label for="name"></label>
          <input type="text" name="name" placeholder="name" value="{{old('name')}}"></input>
        </div>
      @error('email')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror
        <div class="form_item">
          <label for="email"></label>
          <input type="email" name="email" placeholder="Email Address" value="{{old('email')}}"></input>
          <p>{{session('error')}}</p>
        </div>
      @error('password')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror
        <div class="form_item">
          <label for="password"></label>
          <input type="password" name="password"
          placeholder="Password"></input>
        </div>
      @error('password_comform')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
      @enderror
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