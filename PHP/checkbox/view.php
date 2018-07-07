<html>
<head>
<title>PHP TEST</title>
</head>

<body>
<?php
if(isset($_POST["hobby"])){
  $hobby = implode('と', $_POST["hobby"]);
  print "私の趣味は";
  print $hobby;
  print "です。";
}else{
  print "私の趣味はありません。";
}

?>

</body>


</html>
