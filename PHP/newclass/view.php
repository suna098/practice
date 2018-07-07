<html>
<head>
<title>class test</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
</head>

<body>
<font size="4">クラスのテスト</font>
<br>
<br>

<?php
class User{
    private $name = NULL;
    public function print_hello(){
      print $this->name;
      print "さん、こんにちは<br>";
    }
}


class Guest extends User{
    private $name = "砂川昇吾";
    public function print_hello(){
      print $this->name;
      print "さん、はじめまして<br>";
      
    }
}

$newuser = new Guest();
$newuser -> print_hello();
?>











</body>
</html>

