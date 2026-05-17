<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contact.php');
    exit;
}

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$to = "sample@tng.com";
$subject = "お問い合わせがありました。";
$body = "名前: {$name}\n会社名:{$companyName}\n年齢: {$age}\n内容: {$message}";
$headers = "From: {$email}";

if (mb_send_mail($to, $subject, $body, $headers)) {
    $result_message = "お問い合わせが送信されました！ありがとうございます！";
} else {
    $result_message = "申し訳ございません。送信に失敗しました。時間をおいて再度お試しください。";
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム - 送信完了画面</title>
    </head>
    <body>
        <main>
            <h1>お問い合わせフォーム - 送信完了画面</h1>
            <p><?php echo $result_message; ?></p>

            <a href="contact.php">お問い合わせフォームに戻る</a>
        </main>
    </body>
</html>