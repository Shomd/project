<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text/css" href ="login.css?<?php echo date('YmdHis'); ?>">
    <title>login</title>
</head>
<body>
<h1>ログイン</h1>
    <!-- ログインフォーム -->
    <div class = "content">

        <form class = "login_form" method = "post" name = "login_form">
            <p class = "memberID" >社員番号</p>
            <div>
                <input class = "login" type = "text" name = "memberID" placeholder = "社員番号を入力">
                <br>
                <p class = "memberPass">password</p>
            </div>
            <div>
                <input class = "login" type = "text" name = "memberPass" placeholder = "パスワードを入力">
            </div>
            <div>
                <input class = "submit" type = "submit" value = "認証">
            </div>
            
        </form>
    </div>

    <?php
  


   

    ?>






    <script type="text/javascript" src="login.js"></script>
</body>
</html>