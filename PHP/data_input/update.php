<?php session_start();?>

<html>
<head>	
<title>PHP TEST</title>
</head>	


<body>
<?php
require_once("MYDB.php");
$pdo = db_connect();

$id = $_SESSION['id'];


try{
  $pdo->beginTransaction();
  $sql = "UPDATE member
	  SET
	  last_name = :last_name,
	  first_name = :first_name,
	  age       = :age
	  where id = :id";
  $stmh = $pdo->prepare($sql);
  $stmh->bindValue(':last_name',
	  $_POST['last_name'], PDO::PARAM_STR);
  $stmh->bindValue(':first_name',
	  $_POST['first_name'], PDO::PARAM_STR);
  $stmh->bindValue(':age',
	  $_POST['age'], PDO::PARAM_INT);
  $stmh->bindValue(':id',
	  $id, PDO::PARAM_INT);

  $stmh->execute();
  $pdo->commit();

  print "エラー:". $Excecution->getMessage();
}catch (PDOException $Exception){
  print "エラー". $Exception->getMessage();
}

$_SESSION = array();

session_destroy();

?>

</body>
</html>
