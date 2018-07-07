<!DOCTYPE html>
<html>
<body>
<?php
require_once 'AddNumberSub.php';
$obj = new AddNumberSub;
$obj->add(30);
$obj->recorder();//recordにnumを代入
$obj->add(100);
print 'num = ' . $obj->getNum(). '<br>';
print 'recorder = ' . $obj->getRecord();
?>

</body>

</html>
