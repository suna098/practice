<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
      echo 'test';
      $name = array('ホリチャ', '幸田');

      print $name[0].'<br>';

      $member = array(
        array(
	'name' => '草なぎ',
         'age' => 43
	 ),
	 array(
	 'name' => '稲垣',
	 'age' => 44
 	),
	array(
	  'name' => '山口',
	  'age' => 46

	)



      );

      var_dump($name);
      echo '<br>';
      var_dump($member);

      print $member[0]['name'];
      print $member[0]['age'];

     ?>
  </body>
</html>
