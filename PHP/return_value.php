<?php
function getMaxMin(){
    $arr = func_get_args();
    return array(max($arr), min($arr));

}

$result = getMaxMin(1,2,3,4,-5);
print_r($result);

?>
