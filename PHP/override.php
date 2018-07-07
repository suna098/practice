<!DOCTYPE html>

<html>
<body>
<?php

require_once 'SubCustomer.php';

$obj1 = new Customer();
$obj1->show('砂川昇吾', '日本');

$obj2 = new SubCustomer();
$obj2->show('砂川昇吾', '日本');
?>

</body>

</html>
