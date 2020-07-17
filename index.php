<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=arimitsu; host=localhost;", "root", "");
    $stmt = $pdo -> query("select * from 4each_keijiban");
    
    ?>
    <header>
        <img src="4eachblog_logo.jpg">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="wrapper contents">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                <h2>入力フォーム</h2>
                <div class="item">
                    <label>ハンドルネーム</label><br>
                    <input class="textbox" type="text" size="35" name="handlename">
                </div>
                <div class="item">
                    <label>タイトル</label><br>
                    <input class="textbox" type="text" size="35" name="title">
                </div>
                <div class="item">
                    <label>コメント</label><br>
                    <textarea cols="35" rows="7" name="comments"></textarea>
                </div>
                <div class="item">
                    <input class="button" type="submit" value="投稿する">
                </div>
            </form>
            
            <?php
            while ($row = $stmt -> fetch()) {
                echo "<div class='article'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<p>".$row['comments']."</p>";
                echo "<div class='contributor'>posted by ".$row['handlename']."</div>";
                echo "</div>";
            }
            ?>
            
        </div>
        <div class="wrapper side">
            <div class="category">
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
            </div>
            <div class="category">
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>～～～のダウンロード</li>
                    <li>～～～のダウンロード</li>
                </ul>
            </div>
            <div class="category">
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        copyright internous | 4each blog is the one which provides A to Z about programing
    </footer>
</body>
</html>