<?php

// $comment_array = array();

if(!empty($_POST["submitButton"])) {
  echo $_POST["username"];
  echo $_POST["comment"];
}

?>

<!-- data.txtからデータを取得する -->
<?php
// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

//＊配列の準備
$txt = [];
while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp));
}
fclose($fp);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
  <link rel="stylesheet" href="./CSS/style.css">
</head>


<body>
  <h1 class="title">LAB16ちゃんねる</h1>
  <hr>
  <div class="boardWrapper">
    <form action="write.php" method="POST">
      <section>
        <?php foreach ($txt as $txt) : ?>
          <article>
            <div class="wrapper">
              <div class="nameArea">
                <span>名前：</span>
                <p class="username"><?php echo $txt[1]; ?></p>
                <time>
                  ：<?php echo $txt[0]; ?>
                </time>
              </div>
              <p class="comment"><?php echo $txt[2]; ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </section>
      <div class="formWrapper">
        <div>
          <input type="submit" value="書き込む" name="submitButton">
          <label for="">名前：</label>
          <input type="text" name="username">
          <span id="today" class="today">
        </div>
        <div>
          <input id="time" type="hidden" name="time"  value="">
        </div>
        <div>
          <textarea class="commentTextArea" name="comment"></textarea>
        </div>
        </form>
        <form action="read.php" method="">
          <button>表示</button>
        </form>
      </div>
  </div>

<script src="./JS/main.js"></script>
</body>
</html>

    <!-- border: none;
    width: 190px;
    color: black; -->


    <!-- header("Location: index.php");
    exit(); -->
