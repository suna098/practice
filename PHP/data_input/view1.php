<html>
<head>
<title>PHPTEST</title>

</head>

<body>
<?php
$db_user = "root";
$db_pass = "kuwagata18";
$db_host = "localhost";
$db_name = "practice";
$db_type = "mysql";

$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

try{
 $pdo = new PDO($dsn, $db_user,$db_pass);
  print "接続しました。...<br>";
}catch(PDOException $Exception){  
  die('エラー:'. $Exception->getMessage());
}

try{
  $pdo->beginTransaction();
  $sql = "insert into member (last_name, first_name,
          age) values (:last_name, :first_name, :age)";

  $stmh = $pdo->prepare($sql);
  
  $stmh->bindValue(':last_name', $_POST["last_name"]);
  $stmh->bindValue(':first_name', $_POST["first_name"]);
  $stmh->bindValue(':age', $_POST["age"]);
  print_r($stmh);
  $stmh->execute();
  $pdo->commit();
  print 'データを'. $stmh->rowCount(). "件、挿入しました。<br>";
}catch(PDOException $Exception){
  $pdo->rollBack();
  print "エラー:". $Exception->getMessage();
}
 
?>

</body>
</html>
