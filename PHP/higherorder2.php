<?php
function manipulate($data, $func){
  foreach($data as $key => $value){
    $func($key, $value);
  }
}

$result = 0;
function add($index, $value){
  global $result;
  $result+=$value;
}

$ary = array(10,20,30,40,50);

manipulate($ary, 'add');
print "要素の合計は「{$result}」"

?>
