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

$search_key = '%'. $_POST['search_key'].'%';
try{
  $sql = "select * from member where last_name like :last_name 
		or first_name like :first_name";
  $stmh = $pdo->prepare($sql);
  
  $stmh->bindValue(':last_name', $search_key,PDO::PARAM_STR);
  $stmh->bindValue(':first_name', $search_key,PDO::PARAM_STR);
  $stmh->execute();
  $count = $stmh->rowCount();
  print '検索結果は'. $count. "です。<br>";
}catch(PDOException $Exception){
  print "エラー:". $Exception->getMessage();
}

if($count < 1){
	print "検索結果がありません。";
}else {
  
?>

<table width="450" border="1" cellspacing="0" cellpadding="8">
<tbody>
<tr><th>番号</th><th>氏</th><th>名</th><th>年齢</th></tr>
<?php
	while ($row = $stmh->fetch(PDO::FETCH_ASSOC)){
?>

<tr>
<td aign="center"><?=htmlspecialchars($row['id'])?></td>
<td><?=htmlspecialchars($row['last_name'])?></td>
<td><?=htmlspecialchars($row['first_name'])?></td>
<td aign="center"><?=htmlspecialchars($row['age'])?></td>
</tr>


<?php

}
?>

</tbody>


</table>

<?php
}
?>

</body>
</html>
