<html>
<head>
<title>Trait Test</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
</head>

<body>
<font>トレイトテスト</font>
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

trait SayMorning {
  public function print_morning(){
    print $this->name;
    print "さん、おはようございます。<br>";
  }

}
class Guest extends User{
  use SayMorning;
  private $name = "ゲスト";
  public function print_hello(){
    print $this->name;
    print "さん、はじめまして。<br>";
  }
}

$newuser = new Guest();
$newuser->print_hello();
$newuser->print_morning();
?>
</body>

</html>
