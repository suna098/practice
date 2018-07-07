<html>
<body>
<?php
require_once 'Cone.php';
require_once 'Circle.php';


$Figure = array();
$figure[] = new Cone(5, 10);
$figure[] = new Circle(5);
foreach ($figure as $f){
  if ($f instanceof IFigure){
    print get_class($f). ':' . $f->getResult(). '<br>';
  }
}
?>


</body>

</html>

