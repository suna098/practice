<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
</head>
<body>
<?php

if ($_POST['page'] == 8){
   echo '成功';
}
else{
   echo '失敗';
}

print $_POST;
?>

</body>

</html>
