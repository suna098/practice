<?php
$value = 'グローバル変数の値です。';

function func(){
  print $value;
  print '<br>';
  $value = 'ローカル変数の値です。';
  return $value;
}

print func();
print '<br>';
print $value;

?>
