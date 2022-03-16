<?php

    $error = array();

    if($_POST['memberID']){
        if(!$_POST){
            $error[] = "社員番号を入力してください";
        } else if(strlen($_POST['memberID']) > 10) {
            $error[] = "社員番号は１０文字以下にしてください";
        } else if (!filter_var($_POST['memberID'], FILTER_VALIDATE_INT)){
            $error[] = "社員番号またはパスワードが不正です";
        }
    }

    if($_POST['memberPass']){
        if(!$_POST){
            $error[] = "パスワードを入力してください";
        } else if(strlen($_POST['memberPass']) < 4 && strlen($_POST['memberPass']) > 10) {
            $error[] = "パスワードは４文字以上８文字以下にしてください";
        } else if (!filter_var($_POST['memberPass'], FILTER_VALIDATE_INT)){
            $error[] = "社員番号またはパスワードが不正です";
        }
    }



?>
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
    <header class = "header">
        <h1>勤怠管理システム</h1>
    </header>

    <!-- ログインフォーム -->
    <div class = "container">
        <p class = "phrase">ログイン</p>
            <?php
                if($error){
                    echo '<div class = "alert" role = "alert">';
                    echo implode('<br>', $error);
                    echo '</div>';
                }
            ?>
        <div>
            <form class = "login_form" method = "post" name = "login_form" autocomplete="off">
                <p class = "member" >社員番号</p>
                <div>
                    <input class = "login" type = "text" name = "memberID" placeholder = "社員番号を入力">
                    <br>
                    <p class = "member">パスワード</p>
                </div>
                <div>
                    <input class = "login" type = "text" name = "memberPass" placeholder = "パスワードを入力">
                </div>
                <div>
                    <input class = "submit" type = "submit" value = "認証">
                </div>
                
            </form>
        </div>
        
    </div>

<?php

?>
    


    <script type="text/javascript" src="login.js"></script>
</body>
</html>