<?php
$error = "エラーログ出力";
$file = './test.txt';
touch($file);
chmod($file,0755);
$fhn = fopen($file,"w");
fwrite($fhn,$error);
fclose($fhn);
?>
