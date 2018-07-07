<!DOCTYPE html>

<html>
<body>
<?php
require_once 'SampleCls.php';

$obj = new SampleCls();
$obj->member = '砂川昇吾';

var_dump(isset($obj->member));
print '<br>';

unset($obj->member);

var_dump($obj->member);


?>

</body>

</html>
