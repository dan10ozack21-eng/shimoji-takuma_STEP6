<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム</title>
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
            <form action="confirm.php" method="POST">
                <table border="3" style="border-collapse: collapse; width: 100%; max-width: 600px;">
                    <tr>
                        <th style="background-color: #f2f2f2; width: 30%; padding: 10px;">お名前</th>
                        <td style="padding: 10px;">
                            <input type="text" id="name" name="name" size="40">
                        </td>
                    </tr>

                    <tr>
                        <th style="background-color: #f2f2f2; padding: 10px;">会社名</th>
                        <td style="padding: 10px;">
                            <input type="text" id="companyName" name="companyName" size="40">
                        </td>
                    </tr>
                    
                    <tr>
                        <th style="background-color: #f2f2f2; padding: 10px;">メールアドレス</th>
                        <td style="padding: 10px;">
                            <input type="email" id="email" name="email" size="40">
                        </td>
                    </tr>

                    <tr>
                        <th style="background-color: #f2f2f2; padding: 10px;">年齢</th>
                        <td style="padding: 10px;">
                            <input type="text" id="age" name="age" size="40">
                        </td>
                    </tr>

                    <tr>
                        <th style="background-color: #f2f2f2; padding; 10px">お問い合わせ内容</th>
                        <td style="padding: 10px">
                            <textarea id="message" name="message" rows="8" style="width: 95%;" placeholder="お問い合わせ内容"></textarea>
                        </td>
                    </tr>
                </table>
            </form>
            <input type="submit" value="送信" name="submit">
        </main>
    </body>
    <footer>
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <button onclick="changeColor()">押してみてね！</button>
    </footer>
</html>