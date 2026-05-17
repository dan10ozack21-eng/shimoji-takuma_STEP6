<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contact.php');
    exit;
}

$name = $_POST['name'] ?? '';
$companyName = $_POST['companyName'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($companyName) || empty($email) || empty($age) || empty($message)) {
    header('Location: contact.php?error=empty');
    exit;
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム - 確認画面</title>
        <style>
            .target-table {
                border: 3px solid black;
                border-collapse: collapse;
                width: 90%;
                max-width: 600%;
            }

            .target-table th,
            .target-table td {
                border: 3px solid black;
                padding: 10px;
            }

            .target-table th {
                background-color: #f2f2f2;
                width: 30%;
            }
        </style>
    </head>
    <body>
        <header>
            <h2>お問い合わせフォーム - 確認画面</h2>
        </header>
        <aside class="sidebar">
            <nav>
                <ul>
                    <li><a href="#top">トップページ</a></li>
                    <li><a href="#favorite">人気投稿</a></li>
                    <li><a href="#recommenditem">エンジニアおすすめ商品</a></li>
                    <li><a href="#recommendnews">エンジニアおすすめ記事</a></li>
                    <li><a href="#pastposts">投稿ページ</a></li>
                </ul><br>
            </nav>
        </aside>
        <main>
        <table class="target-table">
            <tr>
                <th>お名前</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>会社名</th>
                <td><?php echo $companyName; ?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>年齢</th>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td><?php echo nl2br($message); ?></td>
            </tr>
        </table>

          <form action="send.php" method="POST">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="companyName" value="<?php echo $companyName; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="age" value="<?php echo $age; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">

            <div style="margin-top: 10px;">
                <input type="submit" value="送信" name="submit"><br>
                <input type="button" value="戻る" onclick="history.back()">
            </div>
          </form>
        </main>

    </body>
    <footer>
    </footer>
</html>