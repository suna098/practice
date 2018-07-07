<?php
echo phpinfo();
for ($i = 1; $i <= 5; $i++){
  if ($i == 4){
    break;
  }

  print $i . '回目の処理です。'. '<br>';
}


for ($i = 1; $i <= 5; $i++){
    if ($i == 4){
      continue;
    }

    print $i. '回目の処理です。'. '<br>';
}
?>
