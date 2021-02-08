function CheckPassword(input){
    // フォームの値を取得
    var password = document.getElementById("password").value; //パスワードの値を取得
    var confirm = input.value; //パスワード確認用フォームの値を取得(引数input)

    // パスワードの一致確認
    if(password != confirm){
      input.setCustomValidity('パスワードが一致しません'); // エラーメッセージのセット
    }else{
      input.setCustomValidity(''); // エラーメッセージのクリア
    }
  }


