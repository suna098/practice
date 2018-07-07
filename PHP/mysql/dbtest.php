<html>
<head>
<title>PHP TEST</title>
</head>

<body>
<?php
header("Content-type: text/html; charset=utf-8");
$dsn = 'mysql:host=localhost;dbname=practice;charset=utf8';
$user = 'root';
$password = 'kuwagata18';
try {
  $pdo = new PDO($dsn, $user, $password);

  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   
  print '接続しました。';

}catch (PDOException $e){
print('Error:'.$e->getMessage());
}

?>

</body>


</html>
