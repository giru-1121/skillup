<?php

//データベースに接続
$mysqli = new mysqli('localhost', 'root', '', 'datas');

//データベースに接続できなかったらエラーを表示
if($mysqli->connect_error) {
    echo '接続失敗';
} else {
    echo '接続成功';
}

$mysqli->set_charset('utf8');

$name = 'aoki';
$age = 18;
$message = 'hello';

//データを挿入する
//  $stmt = $mysqli->prepare("INSERT INTO datas (name, age, message) VALUES (?, ?, ?)");

// $stmt->bind_param('sis', $name, $age, $message);

// $stmt->execute();

//データを取得
$result = $mysqli->query("SELECT * FROM datas ORDER BY created DESC");
if($result){
while($row = $result->fetch_object()){
    $name = htmlspecialchars($row->name);
    $message = htmlspecialchars($row->message);
    $age = htmlspecialchars($row->age);
    echo "<p>$name($age):$message<p>";
}

}

?>

