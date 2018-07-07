<?php
session_start();
$_SESSION["id"] = $_POST["id"];
$_SESSION["firstname"] = $_POST["firstname"];
$_SESSION["lastname"] = $_POST["lastname"];
$_SESSION["email"] = $_POST["email"];
if(isset($_POST["id"])){
  $_SESSION["id"] = $_POST["id"];

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
print "id:";
print $_POST["id"]."<br>";
print "名前:";
print $_POST["firstname"].'・'.$_POST["lastname"].'<br>';
print "email:";
print $_POST["email"];
print "<br><br>";
?>

<br>
<input type="submit" value="確認" name="confirm">
<input type="submit" value="戻る" name="back">

</body>

</html>
