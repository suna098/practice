<?php
session_start();
?>

<html>
<head>
<title>PHP TEST</title>

</head>
<body>
<?php
require_once("MYDB.php");

$pdo = db_connect();

$id = 1;
$_SESSION['id'] = $id;



try {
  $sql = "select * from member where id = :id";
  $stmh = $pdo->prepare($sql);

  $stmh->bindValue(':id', $id, PDO::PARAM_INT);
  $stmh->execute();

  $count = $stmh->rowCount();

}catch (PDOException $Exception){
  print "エラー:". $Exception->getMessage();
}

////

if($count < 1){
  print "更新データがありません<br>";
}else{
  $row = $stmh->fetch(PDO::FETCH_ASSOC);
?>

<form name="form1" method="post" action="update.php">
番号:<?=htmlspecialchars($row['id'])?><br><br>
氏:<input type="text" name="last_name" 
	value="<?=htmlspecialchars($row['last_name']) ?>"></input>
名:<input type="text" name="first_name" 
	value="<?=htmlspecialchars($row['first_name']) ?>"></input>
年齢:<input type="text" name="age" 
	value="<?=htmlspecialchars($row['age']) ?>"></input><br><br>
<input type="submit" value="更　新">

</form>
<?php
}
?>

</body>








</html>
