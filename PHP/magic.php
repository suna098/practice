<!DOCTYPE html>

<html>
<body>
<?php
require_once 'SampleCls.php';

$obj = new SampleCls();

$obj->name = '砂川昇吾';
$obj->id = 1001;

print $obj->name.'<br>';
print $obj->id.'<br>';
print $obj->member.'<br>';

$obj->disp();

unset($obj->member);
var_dump($obj->member);

?>


</body>

</html>
