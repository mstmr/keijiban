
<!doctype HTML>
<html lang="ja">


<head>
 <meta charset="utf-8">
 <title>掲示板</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "");
$stmt = $pdo->query("select * from 4each_keijiban");



?>

 <header>
      <div class="logo">
        <img src="4eachblog_logo.jpg">
      </div>

      <ul>
        <li><a href="">トップ</a></li>
        <li><a href="">プロフィール</a></li>
        <li><a href="">4eachについて</a></li>
        <li><a href="">登録フォーム</a></li>
        <li><a href="">問い合わせ</a></li>
        <li><a href="">その他</a></li>
      </ul>

  </header>

 <main>
    <div class="main_container">
     <div class="left">
          <div class="left_title1">
              プログラミングに役立つ掲示板
          </div>
          <br>
          <form method="post" action="insert.php">
          <h2>入力フォーム</h2>
           <div>
             <label>ハンドルネーム</label>
             <br>
             <input type="text" class="text" size="25" name="handlename">
           </div>

           <div>
             <label>タイトル</label>
             <br>
             <input type="text" class="text" size="35" name="title">
           </div>

           <div>
             <label>コメント</label>
             <br>
             <textarea cols="35" rows="7" name="comments"></textarea>
           </div>

           <div>
             <input type="submit" class="submit" value="投稿する">
           </div>
           </form>
     </div>

     <div class="right">
          <div class="right_title1">人気の記事</div>
           <ul>
             <li><a href="">PHPオススメ本</a></li>
             <li><a href="">PHP MyAdminの使い方</a></li>
             <li><a href="">今人気のエディタ Top5</a></li>
             <li><a href="">HTMLの基礎</a></li>
           </ul>

          <div class="right_title1">オススメリンク</div>
           <ul>
             <li><a href="">インターノウス株式会社</a></li>
             <li><a href="">XAMPPのダウンロード</a></li>
             <li><a href="">Eclipseのダウンロード</a></li>
             <li><a href="">Bracketsのダウンロード</a></li>
           </ul>

          <div class="right_title1">カテゴリ</div>
           <ul>
             <li><a href="">HTML</a></li>
             <li><a href="">PHP</a></li>
             <li><a href="">MyAQL</a></li>
             <li><a href="">JavaScript</a></li>
           </ul> 
     </div>
     
     <?php

     while ($row = $stmt->fetch()){

     echo"<div class='kiji'>";
     echo "<div class='kiji_title'>".$row['title']."</div>";
        echo "<div class='kiji_contents'>";
        echo $row['comments'];
        echo "<div class='kiji_handlename'>posted by ".$row['handlename']."</div>";
     echo "</div>";
     echo "</div>";
     }

     ?>


    </div>

 </main>
    
 <footer>
   copyright © internous ┃ 4each blog the which ptovides A to Z about programing.
 </footer>



</body>

</html>
