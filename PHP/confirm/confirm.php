<?php
session_start();
$_SESSION["onamae"] = $_POST["onamae"];
$_SESSION["honbun"] = $_POST["honbun"];
if(isset($_POST["user_id"])){
  $_SESSION["user_id"] = $_POST["user_id"];

}

?>

<html>
<head>
<title>PHPTEST</title>

</head>

<body>


確認画面
<form name="form1" method="post" action="view.php">

<?php
print "名前:";
print $_POST["onamae"];
print "<br><br>";
print "本文:<br>";
print nl2br($_POST["honbun"]);
?>

<br>
<input type="submit" value="確認" name="confirm">
<input type="submit" value="戻る" name="back">

</body>

</html>
