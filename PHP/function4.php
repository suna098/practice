<?php
$w = 20;
$h = 15;
$area = getArea($w, $h);
print '四角形の面積:' . $area;

if($w > 0 && $h > 0){
  function getArea($a, $b){
    $result = $a * $b;

    return $result;
  }
}

?>
