<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contact.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム - 送信完了画面</title>
    </head>
    <body>
        <h1>お問い合わせフォーム - 送信完了画面</h1>


        <a href="contact.php">お問い合わせフォームに戻る</a>
    </body>
</html>