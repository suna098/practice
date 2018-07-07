<!DOCTYPE html>

<html>
<body>
<?php
require 'Example1.php';
require 'Example2.php';

$obj = new Example1(200, 1.234);

$obj2 = new Example2("Pride");

print "num1={$obj->num1}";

print '<br>';
print "num2={$obj->num2}";

print '<br>';
print "str={$obj2->str}";

?>
</body>
</html>
