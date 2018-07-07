<?php
$value = 'グローバル変数の値です。';

function func(){
  global $value;
  print $value;
  print '<br>';
  $value = '関数内で代入した値です。';
  return $value;
}

print func();
print '<br>';
print $value;

?>
