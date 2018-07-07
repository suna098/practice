<?php
function addValue(){
  static $val = 0;
  return ++$val;
}

print addValue();
print '<br>';
print addValue();
print '<br>';
print $val;
?>
