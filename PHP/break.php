<?php
$num = 0;
for ($i = 0; $i < 100; $i++){
  $num += $i;

  if($num > 1000){
    break;
  }
}

print '合計値が1000を超えました。$iの値は'. $i;

?>
