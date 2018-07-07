<!DOCTYPE html>

<html>
<body>
こんにちは、
<?php
foreach ($_GET as $k => $v){
  print $v.'<br>';
}
print $_GET['name'];
?>さん！

</body>

</html>
