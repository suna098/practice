<html>
<head>
<title>Class Test</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
</head>

<body>
<font>Class Test</font>
<br><br>

<?php
interface Show{
  public function showName();
}

class User {
  private $name = NULL;
  public function print_hello(){
    print $this->name;
    print "さん、こんにちは。<br>";
  }
}

class Guest extends User implements Show{
  private $name = "ゲスト";
  public function print_hello(){
    print $this->name;
    print "さん、はじめまして。<br>";
  }

  function __construct($name){
    $this->name = $name;
  }

  public function showName(){
    print $this->name;
  }
}

$newuser = new Guest('SHOGO');
$newuser->print_hello();
$newuser->showName();
?>
</body>

</html>
