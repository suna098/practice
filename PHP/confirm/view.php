<?php
session_start();
?>

<html>
<head>
<title>PHPTEST</title>
</head>

<body>
<?php
if (isset($_POST["confirm"])){

?>

<?php
print $_SESSION["onamae"]."さんからのメッセージ";
print "<br><br>";
print "本文: <br>";
print nl2br($_SESSION["honbun"]);

?>

<br>
<br>

<a href="form.html">もう一度試すにはここをクリック</a>

<hr>
<pre>
<?php print_r($_SESSION);?>
<pre>
<hr>

<?php
}elseif (isset($_POST["back"])){
?>

<font size="4">テキスト送信のテスト</font>
<form name="form1" method="post" action="confirm.php">
名前:<br>
<input type="text" name="onamae" value="<?=$_SESSION["onamae"]?>">
<br>
本文:<br>
<textarea name="honbun" cols="30" rows="5"><?=$_SESSION["honbun"]?></textarea>
<br>

<input type="submit" value="送信">
</form>
<?php
}else{
?>

エラーです<br>
<a href="form.html">form.html</a>からアクセスしてください。

<?php
}
?>

</body>

</html>
<a href="form.htl">
