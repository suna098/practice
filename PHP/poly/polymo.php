<!DOCTYPE html>

<html>
<body>
<?php
require_once 'Products.php';
require 'Manufactures.php';
require 'Goods.php';

$obj1=new Products();
$obj2=new Manufactures();
$obj3=new Goods();

$obj1->disp();
$obj2->disp();
$obj3->disp();

?>

</body>

</html>
