<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
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
                <td><?php echo $message; ?></td>
            </tr>
        </table>

            <div style="margin-top: 10px;">
                <input type="submit" value="送信"><br>
                <input type="button" value="戻る" onclick=history.back()>
            </div>
        </main>

    </body>
    <footer>
    </footer>
</html>