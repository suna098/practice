<?php
for ($i = 0 , $j = 50; $i < 100; $i++){
    while($j){
      $j--;
      if($j == 20){
        goto end;
      }
    }
}
print "i = $i";
end:
print "j = $j";

?>
