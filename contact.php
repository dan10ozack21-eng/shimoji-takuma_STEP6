<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム</title>
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
            <h2>お問い合わせフォーム</h2>
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
          <?php if (isset($_GET['error']) && $_GET['error'] === 'empty'): ?>
            <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
                未入力の項目があります。すべての項目の入力をお願いいたします。
            </div>
          <?php endif; ?>

            <form id="contact-form" action="confirm.php" method="POST">
                <table class="target-table">
                    <tr>
                        <th>お名前</th>
                        <td>
                            <input type="text" id="name" name="name" size="40">
                        </td>
                    </tr>

                    <tr>
                        <th>会社名</th>
                        <td>
                            <input type="text" id="companyName" name="companyName" size="40">
                        </td>
                    </tr>
                    
                    <tr>
                        <th>メールアドレス</th>
                        <td>
                            <input type="email" id="email" name="email" size="40">
                        </td>
                    </tr>

                    <tr>
                        <th>年齢</th>
                        <td>
                            <input type="text" id="age" name="age" size="40">
                        </td>
                    </tr>

                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>
                            <textarea id="message" name="message" rows="8" style="width: 95%;" placeholder="お問い合わせ内容"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="送信" name="submit">
            </form>
        </main>
      <script src="style.js"></script>
    </body>
    <footer>
        <p>下のボタンを押すとfooterの背景色が変わります。</p>
        <button onclick="changeColor()">押してみてね！</button>
    </footer>
</html>