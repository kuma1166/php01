<?php
// エラーの場合、ブラウザ上にエラー分を表示させる
ini_set('display_errors', "On");

// HTMLのname属性の値を変数に代入
$time    = $_POST["time"];
$name    = $_POST["username"];
$comment = $_POST["comment"];
$c       = ","; //配列を作るために「,」で値を区切る

//文字作成
$str = $time.$c.$name.$c.$comment;

//エラーの確認ではechoかvar_dump+exitを利用する（部分的にストップする処理を行う）
// echo $str;
// exit;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み、aはファイル追加の意味（addの略称）

fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit();
?>
