<html>
<head>
<title>PHP Test</title>
</head>

<?php
print $_POST["onamae"]."さんからのメッセージ";
print "<br><br>";
print "本文:<br>";
print nl2br($_POST["honbun"]);
?>

</html>
