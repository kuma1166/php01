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
    <title>Document</title>
    <style>
    td{
        background-color: #FF0000;
    }
    </style>
</head>
<body>

<table>
<?php
//＊ここで表示処理
for($i=0; $i<count($txt)-1;$i++){
        echo "<tr>";
        echo "<td>".$txt[$i][0]."</td>";
        echo "<td>".$txt[$i][1]."</td>";
        echo "<td>".$txt[$i][2]."</td>";
        echo "</tr>";
}
?>
</table>
<ul>
<li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>
