<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<header>
    <!-- サイトロゴ -->
    <a href="{{url('/')}}">BookTree</a>  
      <nav>
        <a href="{{url('/admin/post/index')}}">みんなの投稿</a>
        <a href="{{url('/book/index')}}">Mylibrary</a>
      </nav>
      @if(isset($user_name))
      <p>ようこそ{{$user_name}}さん</p>
      @endif
    

    <a href="{{url('/')}}">ログアウト</a>
  </header>

  @yield('content')
  



  <footer>
    <p><small>Powerd by Atsuko Tanaka</small></p>
  </footer>  
</body>
</html>