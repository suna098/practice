<html>
<head><title>PHP TEST</title></head>
<body>

<?php
//postgresql関数を利用してPostgreSQLへ接続する例

$dbname = 'postgres';
$dbhostname = '127.0.0.1';
$dbportnum = '5432';
$dbuser = 'postgres';
$dbpassword = 'kuwagatapos';


$link = pg_connect("dbname=$dbname host= port=$dbportnum user=$dbuser password=$dbpassword");

$link = 'test';

if (!$link) {
  die('接続失敗'.pg_last_error());
  }

  $result = pg_query($sql);
  if (!$result) {
      die('クエリ失敗'.pg_last_error());
      }
          while($row2 = pg_fetch_row($result)){
                  echo implode(", ", $row2) . PHP_EOL;
                      }

                      pg_close($link);

?>


     </body>
     </html>
