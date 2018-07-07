<!DOCTYPE html>

<html>
<body>
<?php
require_once 'SubCls.php';

$sc = new SubCls();
$sc->multiplier(50);
$sc->show();
$sc->divider(200);
$sc->show();

?>

</body>

</html>
