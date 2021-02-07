function check(){
    alert(contact.name.value);
    
    if(contact.name.value == ""){
        alert("名前を入力してください");    //エラーメッセージを出力
        return false;    //送信ボタン本来の動作をキャンセルします
    }else if(contact.email.value == ""){
        alert("メールアドレスを入力してください");    //エラーメッセージを出力
        return false;    //送信ボタン本来の動作をキャンセルします
    }else if(contact.age.value == ""){
        alert("年齢を入力してください");
        return false;
    }else if(isFinite(contact.age.value) == false){
        alert("数字を入力してください");
        return false;
    }else if(contact.gender.value == ""){
        alert("項目を選択してください");
        return false;
    }else if(contact.comment.value == ""){
        alert("問合せ内容を入力してください");
        return false;
    }else{
        return true;
    }
}