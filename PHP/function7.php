<?php
squareArea();
$area = getArea(20, 15);
print '四角形の面積:' . $area;

function squareArea(){
  function getArea($a, $b){
    $result = $a * $b;

    return $result;
  }

}
?>
