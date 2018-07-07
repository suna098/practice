<?php
header("Content-type: text/html; charset=utf-8");
 
$dsn = 'mysql:host=127.0.0.1;dbname=practice;charset=utf8';
$user = 'root';
$password = 'kuwagata18';
 
try{
	$dbh = new PDO($dsn, $user, $password);
	print_r($dbh);
        $sql = "SELECT * FROM tb1";

	$statement = $dbh -> query($sql);
	
	$row_count = $statement->rowCount();

	var_dump($statement->fetch());
	while($row = $statement->fetch()){
		
		$rows[] = $row;
	}
	/*
	foreach ($statement as $row) {
		$rows[] = $row;
	}
	*/
	
	//データベース接続切断
	$dbh = null;
    
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>nameテーブル表示</title>
<meta charset="utf-8">
</head>
<body>
<h1>社員データ表示</h1> 
 
 
 
<?php 
print_r($rows);
foreach($rows as $row){
?> 
<table border='1' class="data">
	<tr><th>名前</th><td><?php echo $row['nama']; ?> </td> </tr>
        <tr><th>番号</th><td><?php echo $row['bang']; ?></td> </tr>
        <tr><th>年齢</th><td><?php echo $row['tosi']; ?></td> </tr>
</table>

<br>
<br>
<?php 
} 
?>

<center> 
<button type="button" class="square_btn"  onclick="location.href='./home.php'">
ホームに戻る
</button>
</center>
 
</body>
</html>
