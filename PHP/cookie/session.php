<?php
session_start();

$count = 1;
if (isset($_SESSION["count"])){
    $count = $_SESSION["count"];
    $count++;
}
$_SESSION["count"] = $count;
?>

<html>
<head>
<title>session test</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
</head>

<body>
セッション変数のテスト<br>
<br>

<?php
if ($count == 1){
?>
初めての訪問です<br>
<br>
セッション変数にデータがありません。<br>
このページをリロードしてください<br>

<?php
}else{	
?>

あなたの訪問は<?=$count?>回目です。<br>

<?php
}	
?>

</body>

</html>


