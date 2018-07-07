<?php
function manipulate($data, $func){
  foreach($data as $key => $value){
    $func($key, $value);
  }
}

function disp($index, $value){
	print $index + 1;
	print "番目:". $value ;
	print '<br>';
	/*print $index + 1. '番目' . $value. '<br>';*/
}


$ary = array(10,20,30,40,50);

manipulate($ary, 'disp');

?>
