<?php

function average(){//関数定義の際にはパラメーターを設定しない
$result = 0;

$arr = func_get_args();

foreach ($arr as $element){
  $result += $element;
}

return $result / func_num_args();

}
print average(10, 20, 30, 40, 50);

?>
