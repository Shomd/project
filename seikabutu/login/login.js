function nextPage() {
    const id = document.login_form.user_id.value //ID枠に入力された値（文字列）を定義
    const pwd = document.login_form.password.value; //Password枠に入力された値（文字列）を定義
    location.href = id + pwd + ".html"; //リンク先URLを作成
}