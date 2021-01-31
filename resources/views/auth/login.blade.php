@extends('top')

@section('login')
<div class="top_login">
      <h1>BookTreeにログイン</h1>
      <form>
        <div class="form_item">
          <label for="email"></label>
          <input type="email" name="email" placeholder="Email Address"></input>
        </div>
        <div class="form_item">
          <label for="password"></label>
          <input type="password" name="password"
          placeholder="Password"></input>
        </div>
        <div class="button_panel">
          <input type="submit" class="button" value="ログイン"></input>
        </div>
      </form>
        <div class="form_footer">
          <p><a href="#">パスワードをお忘れの方</a></p>
        </div>
    </div>
  @endsection