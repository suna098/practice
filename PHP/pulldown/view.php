<html>
<head>
<title>PHP TEST</title>
</head>

<body>
<?php
if($_POST["ken"] != ""){
	print "都道府県: <br>";
	print $_POST["ken"];
}else{
    print "都道府県を選んでください<br>";
}
?>

</body>


</html>
