
<!DOCTYPE html>

<html>
<body>
<?php
require_once 'Cone1.php';
$obj = new Cone1;
$obj->setRadius(10);
$obj->setHeight(50);

print "底辺の半径: {$obj->getRadius()}". "<br>";
print "円錐の高さ: {$obj->getHeight()}". "<br>";

print "円錐の体積: {$obj->getVolume()}";
?>
</body>
</html>

